<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingTest extends TestCase
{
    public function testGet()
    {
        $response = $this->get('/pzn')
        ->assertStatus(200)
        ->assertSeeText('Hello PZN');
    }

    public function testRedirect()
    {
        $response = $this->get('/youtube')
        ->assertStatus(301)
        ->assertRedirect('/pzn');
    }

    public function testFallback()
    {
        $response = $this->get('/tidakada')
        ->assertStatus(200)
        ->assertSeeText('404 Not Found. Go Back to');
    }
}