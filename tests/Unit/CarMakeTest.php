<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class CarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testCarMake()
    {
        $car = Car::find(10);
        $car_make=$car->Make;
        $this->assertContains($car_make, ['ford', 'honda', 'toyota']);
    }
}