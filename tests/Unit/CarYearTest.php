<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use App\car;

class CarYearTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarYear()
    {
        $car = Car::find(40);
        $car_year = (int) $car->year;
        $this->assertInternalType('integer', $car_year);
    }
}