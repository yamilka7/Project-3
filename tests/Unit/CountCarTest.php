<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class CountCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarCount()
    {
        $cars = Car::All();
        $carsCount = $cars->count();
        $this->assertEquals(50, $carsCount);
    }
}