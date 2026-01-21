<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    public function testGetEvn(){
        $app = env('YOUTUBE');
        self::assertEquals('Programmer Zaman Now', $app);
    
    }
}
