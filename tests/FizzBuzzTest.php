<?php

namespace Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private $fizzBuzz;
    private $numbers;

    /**
     * @test
     */
    public function multiples_of_three_print_fizz()
    {
        $this->givenNumbers([3, 6, 9, 99]);
        $this->numberShouldBe(function () {
            return 'Fizz';
        });
    }

    /**
     * @param array $numbers
     * @return void
     */
    private function givenNumbers(array $numbers)
    {
        $this->numbers = $numbers;
    }

    /**
     * @param string $expected
     */
    private function numberShouldBe(callable $callback): void
    {
        foreach ($this->numbers as $number) {
            $actual = $this->fizzBuzz->convert($number);
            $this->assertEquals($callback($number), $actual);
        }
    }

    /**
     * @test
     */
    public function multiples_of_five_print_buzz()
    {
        $this->givenNumbers([5, 10, 25, 100]);
        $this->numberShouldBe(function () {
            return 'Buzz';
        });
    }

    /**
     * @test
     */
    public function numbers_which_are_multiples_of_both_three_and_five_print_FizzBuzz()
    {
        $this->givenNumbers([15, 75]);
        $this->numberShouldBe(function () {
            return 'FizzBuzz';
        });
    }

    /**
     * @test
     */
    public function non_fizz_and_buzz()
    {
        $this->givenNumbers([1, 2, 7]);
        $this->numberShouldBe(function ($number) {
            return $number;
        });
    }

    protected function setUp()
    {
        $this->fizzBuzz = new FizzBuzz();
        parent::setUp();
    }
}
