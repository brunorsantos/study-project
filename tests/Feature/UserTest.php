<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        factory(User::class,10)->create();
    }

    /**
     * A basic test if class user exists.
     *
     * @return void
     */
    public function test_get_user()
    {
        $user = User::first();
        $this->assertTrue(true);
    }

    public function test_save_user_active()
    {
        $user = User::first();
        $id = $user->id;
        $user->is_active = 1;
        $user->save();

        $user = User::find($id);
        $this->assertEquals($user->is_active,1);
    }

    public function test_save_user_admin()
    {
        $user = User::first();
        $id = $user->id;
        $user->is_admin = 1;
        $user->save();

        $user = User::find($id);
        $this->assertEquals($user->is_admin,1);
    }
}
