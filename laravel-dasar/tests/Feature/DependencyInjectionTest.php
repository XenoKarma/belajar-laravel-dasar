<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Data\Foo;
use App\Data\Bar;
use Tests\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function test_example()
    {
        $foo = new Foo();
        $bar = new Bar($foo);

        self::assertEquals('foobar', $bar->bar());
    }
}
