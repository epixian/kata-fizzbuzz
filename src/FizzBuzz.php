<?php

class FizzBuzz
{
    public function translate($number)
    {
        if ($this->isDivisibleByThree($number) && $this->isDivisibleByFive($number))
            return 'fizzbuzz';

        if ($this->isDivisibleByThree($number)) 
            return 'fizz';

        if ($this->isDivisibleByFive($number))
            return 'buzz';

        return $number;
    }

    public function countTo($count)
    {
        for ($i = 1; $i <= $count; $i++) 
        {
            $result[] = $this->translate($i);
        }

        return $result;
    }

    private function isDivisibleByThree($i)
    {
        return $i % 3 == 0;
    }

    private function isDivisibleByFive($i)
    {
        return $i % 5 == 0;
    }
}
