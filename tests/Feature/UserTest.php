<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function testRegisterSuccess()
    {
        $this->post('api/register', [
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
        $this->post('api/register', [
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
        
        $this->post('api/register', [
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

}
