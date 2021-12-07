<?php

namespace Tests\Feature\App\Htpp\Controllers;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_user()
    {
        $user = $this->auth();
        $this->post('/users', [
            'name' => 'test',
            'email' => '05Rungr@gmail.com'
            , 'password' => '123456']);
        $this->assertDatabaseHas('users', [
            'name' => 'test',
            'email' => '05Rungr@gmail.com']);
    }

    public function test_update_user()
    {

        $user = $this->auth();
        $response = $this->put("/users/$user->id", [

            'name' => 'Gatito64',
            'email' => '26richardr@gmail.com'
        ]);

        $this->assertDatabaseHas('users',
            ['name' => 'Gatito64',
                'email' => '26richardr@gmail.com']);

    }


    public function test_delete_user()
    {
        $user = $this->auth();
        $response = $this->delete("/users/$user->id");
        $this->assertDatabaseMissing('users', ['id' => $user->id]);

    }

    private function auth($role = 'admin')
    {
        $user = User::factory()->create();
        $user->role = $role;
        $this->actingAs($user);
        return $user;
    }


}