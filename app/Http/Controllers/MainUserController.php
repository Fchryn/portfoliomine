<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserChangePassRequest;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MainUserController extends Controller
{

    public function forgotPassword()
    {
        return view('pages.auth.forgotpass');
    }

    public function AlreadyRegister(UserRegisterRequest $request): JsonResponse {
        $data = $request->validated();
        
        $existingUser = User::where('username', $data['username'])
                            ->orWhere('name', $data['name'])
                            ->orWhere('email', $data['email'])
                            ->exists();

        if ($existingUser) {
            throw new HttpResponseException(response()->json([
                "errors" => [
                    "username" => [
                        "Username already registered"
                        ],
                        "name" => [
                           "Name Already Registered" 
                        ],
                        "email" => [
                           "Email Already Registered" 
                        ]
                ]
            ], 400));
        }
                
        $user = new User($data);
        $user->password = Hash::make($data['password']);
        $user->save();
        
        //return response()->json([
            //'message' => 'User successfully registered',
            //'user' => new UserResource($user)
        //], 201);
        return (new UserResource($user))->response()->setStatusCode(201);
        //return response()->json(new UserResource($user), 201);
        //return view('pages.auth.login', ['User' => User::all()]);
    }

    public function AlreadyLogin(UserLoginRequest $request): UserResource {
        $data = $request->validated();

        $user = User::where('email', $data['email'])->first();

        if(!$user || !Hash::check($data['password'], $user->password)) {
            throw new HttpResponseException(response([
                "errors" => [
                    "message" => [
                       "Email or Password Wrong." 
                    ]
                ]
            ], 401));
        }
        $user->token = Str::uuid()->toString();
        $user->save();

        return new UserResource($user);
    }

    public function forgotpass(UserChangePassRequest $request): UserResource {
        $data = $request->validated();

        $user = User::where('email', $data['email'])->first();

        if(!$user) {
            throw new HttpResponseException(response([
                "errors" => [
                    "message" => [
                       "Email Wrong." 
                    ]
                ]
            ], 401));
        }
        $user->save();

        return new UserResource($user);
    }
}
