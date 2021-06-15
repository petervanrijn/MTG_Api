<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function login_existing_user()
    {
      $user = User::create([
        'name' => 'Peter',
        'email' => 'petervanrijn@hotmail.nl',
        'password' => bcrypt('password')
      ]);


      $response = $this->post('/api/login',[
        'email' => $user->email,
        'password' => 'password'
        'device_name' => 'android'
      ]);

      $response->assertSuccessful();

      $this->assertNotEmpty($repsonse->getContent());

      $this->assertDatabaseHas("personal_access_tokens",[
        'name' => 'android',
        'tokenable_type' => User::class,
        'tokenable_id' => $user->id  
      ])
    }

    public function login_existing_user(){
        $user = User::create([
            'name' => 'Peter',
            'email' => 'petervanrijn@hotmail.nl',
            'password' => bcrypt('secret')
          ]);

          $token = $user->createToken('android')->plainTextToken;

          $response = $this->get('/api/user',[
            "Authorization" => 'Bearer ' . $token
          ]);

          $repsonse->assertSuccesful();

          $response->assertJson(function($json){
            $json->where('email', 'petervanrijn@hotmail.nl')->missing('password')->etc();
          });
    }
}
