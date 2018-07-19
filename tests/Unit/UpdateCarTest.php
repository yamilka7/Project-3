<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class UpdateCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateCar()
    {
        $car = Car::find(50);
        $car->year = '2000';
        $this->assertTrue($car->save());
    }
}
