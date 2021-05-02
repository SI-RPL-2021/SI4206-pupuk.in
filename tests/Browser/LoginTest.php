<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                // ->click('a','Login')
                // ->assertSee('Login')
                ->type('email', 'admin@gmail.com')
                ->type('password', '12345678')
                ->press('Login')
                ->assertSee('These credentials do not match our records.');
        });
    }
}
