<?php


namespace App;


class FizzBuzz
{

    public function convert(int $number)
    {
        if ($number % 3 == 0) {
            return 'Fizz';
        } else {
            return 'Buzz';
        }
    }
}