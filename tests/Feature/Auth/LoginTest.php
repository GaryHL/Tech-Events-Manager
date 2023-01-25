<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_view_a_login_form()
    {
       $response = $this->get('/login')->assertSuccessful()->assertViewIs('auth.login');

      
    }   
    public function test_user_can_login()
    {
        $user = User::factory()->create([
            'password' => bcrypt($password = 'secret12'),
           ]);
           $response = $this->post('/login', ['email' => $user -> email, 'password' => $password])->assertRedirect('/');
           $this->assertAuthenticatedAs($user);
    }






}
