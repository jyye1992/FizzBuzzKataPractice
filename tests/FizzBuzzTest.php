<?php

namespace Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function multiples_of_three_print_fizz()
    {
        $fizzBuzz = new FizzBuzz();
        $expected = 'Fizz';

        foreach ([3, 6, 9, 99] as $number) {
            $actual = $fizzBuzz->convert($number);
            $this->assertEquals($expected, $actual);
        }
    }

    /**
     * @test
     */
    public function multiples_of_five_print_buzz()
    {
        $fizzBuzz = new FizzBuzz();
        $expected = 'Buzz';

        foreach ([5, 10, 25, 100] as $number) {
            $actual = $fizzBuzz->convert($number);
            $this->assertEquals($expected, $actual);
        }
    }

}
