<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;

uses(DatabaseMigrations::class);

test('about page', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/about')
            ->assertSeeIn('main', 'About')
        ;
    });
});

test('click on Welcome link', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/about')
            ->clickLink('Welcome')
            ->assertSeeIn('main', 'Welcome')
        ;
    });
});
