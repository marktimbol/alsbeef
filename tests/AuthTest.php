<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthTest extends TestCase
{
	use DatabaseMigrations;

    public function test_show_a_login_form_when_logging_in()
    {
    	$this->visit('/login')
    		->see('Login');
    }

    public function test_show_an_error_message_when_the_login_form_is_not_populated_correctly()
    {
    	$this->visit('/login')
    		->type('john@doe.com', 'email')
    		->press('Login')
    		->see('The password field is required.');
    }
    
}
