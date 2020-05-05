<?php

namespace Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function multiple_of_three_print_fizz()
    {
        $fizzBuzz = new FizzBuzz();
        $expected = 'Fizz';

        foreach ([3, 6, 9, 99] as $number) {
            $actual = $fizzBuzz->convert($number);
            $this->assertEquals($expected, $actual);
        }
    }

}
