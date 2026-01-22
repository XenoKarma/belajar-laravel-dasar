<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    public function testHello()
    {
        $response = $this->get('/hello');
        $response->assertSeeText('Hello PZN');

        $response = $this->get('/hello-again');
        $response->assertSeeText('Hello Andika');
    }
    public function testWorld()
    {
        $response = $this->get('/hello-world');
        $response->assertSeeText('World PZN');
    }

    public function testTemplate()
    {
        $response = $this->get('/hello-world');
        $response->assertViewIs('hello.world');
        $response->assertViewHas('name', 'PZN');
    }
}
