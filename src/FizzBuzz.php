<?php


namespace App;


class FizzBuzz
{

    public function convert(int $number)
    {
        return $this->isFizz($number) && $this->isBuzz($number) ?
            'FizzBuzz' : $this->isFizz($number) ?
                'Fizz' : $this->isBuzz($number) ?
                    'Buzz' : $number;
    }

    /**
     * @param int $number
     * @return bool
     */
    private function isFizz(int $number): bool
    {
        return $number % 3 == 0;
    }

    /**
     * @param int $number
     * @return bool
     */
    private function isBuzz(int $number): bool
    {
        return $number % 5 == 0;
    }
}