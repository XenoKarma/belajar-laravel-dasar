<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    public function testConfig()
    {
        $firstName = config('contoh.author.first');
        $lastName = config('contoh.author.last');
        $email = config('contoh.contact.email');
        $web = config('contoh.contact.web');

        self::assertEquals('Andika', $firstName);
        self::assertEquals('PURNAMA', $lastName);
        self::assertEquals('echo.andika@gmail.com', $email);
        self::assertEquals('www.andikapurnama.com', $web);
    }
}
