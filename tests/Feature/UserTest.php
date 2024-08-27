<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function testRegisterSuccess()
    {
        $this->post('api/users', [
            'username' => 'IwanFachryan',
            'name' => 'Iwan Fachryan Maulana Faisal',
            'email' => 'iwan27@gmail.com',
            'password' => 'rahasia'
        ])->assertStatus(201)
            ->assertJson([
                "data" => [
                    'username' => 'IwanFachryan',
                    'name' => 'Iwan Fachryan Maulana Faisal',
                    'email' => 'iwan27@gmail.com'
                ]
            ]);
    }

    public function testRegisterFailed()
    {
        $this->post('api/users', [
            'username' => '',
            'name' => '',
            'email' => '',
            'password' => ''
        ])->assertStatus(400)
            ->assertJson([
                "errors" => [
                   "username" => [
                        'The username field is required.'
                   ],
                   "name" => [
                        'The name field is required.',
                   ],
                   "email" => [
                        'The email field is required.'
                   ],
                   "password" => [
                        'The password field is required.'
                   ]
                ]
            ]);
    }

    public function testRegisterUsernameNameEmailAlreadySuccess()
    {
        $this->testRegisterSuccess();
        
        $this->post('api/users', [
            'username' => 'IwanFachryan',
            'name' => 'Iwan Fachryan Maulana Faisal',
            'email' => 'iwan27@gmail.com',
            'password' => 'rahasia'
        ])->assertStatus(400)
            ->assertJson([
                "errors" => [
                    'username' => [
                        'Username Already Registered'
                    ],
                    'name' => [
                        'Name Already Registered'
                    ],
                    'email' => [
                        'Email Already Registered'
                    ]
                ]
            ]);
    }

    public function testLoginSuccess() 
    {
        $this->seed(UserSeeder::class);

        $this->post('api/users/login', [
            'email' => 'test',
            'password' => 'test'
        ])->assertStatus(200)
        ->assertJson([
            'data' => [
                'email' => 'test',
                'name' => 'test'
            ]
        ]);

        $user = User::where('email', 'test')->first();
        self::assertNotNull($user->token);
    }

    public function testLoginFailedUsernameNotFound() {
        $this->post('api/users/login', [
            'email' => 'test',
            'password' => 'test'
        ])->assertStatus(401)
        ->assertJson([
            'errors' => [
                'message' => [
                    'Username or Password Wrong.'
                ]
            ]
        ]);
    }

    public function testLoginPasswordWrong() 
    {
        $this->seed(UserSeeder::class);

        $this->post('api/users/login', [
            'email' => 'test',
            'password' => 'salah'
        ])->assertStatus(401)
        ->assertJson([
            'errors' => [
                'message' => [
                    'Username or Password Wrong.'
                ]
            ]
        ]);
    }

}
