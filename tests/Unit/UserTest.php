<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{

	protected $user;

    /**
     * A basic test if class user exists.
     *
     * @return void
     */
    public function setUp()
    {
    	parent::setUp();
	
    }

    /**
     * A basic test if class user exists.
     *
     * @return void
     */
    public function test_it_has_user()
    {
    	
        $this->assertTrue(true);
    }
}
