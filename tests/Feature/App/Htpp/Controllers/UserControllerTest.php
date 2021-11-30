<?php

namespace Tests\Feature\App\Htpp\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_user()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->withSession(['banned' => false])
            ->get('/');


        $this->post('/users', [
            'name' => 'test',
            'email' => '05Rungr@gmail.com'
            , 'password' => '123456']);
        $this->assertDatabaseHas('users', [
            'name' => 'test',
            'email' => '05Rungr@gmail.com']);
    }


}