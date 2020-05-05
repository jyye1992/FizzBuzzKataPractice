<?php

namespace Tests;

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


        $actual = $fizzBuzz->convert(3);
        $this->assertEquals($expected, $actual);
    }

}
