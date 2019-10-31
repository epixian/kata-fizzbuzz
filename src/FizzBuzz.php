<?php

class FizzBuzz
{
    public function countTo($count)
    {
        $result = [];
        for ($i = 1; $i <= $count; $i++) {
            if ($this->isDivisibleByThree($i) && $this->isDivisibleByFive($i))
                $result[$i] = 'fizzbuzz';

            else if ($this->isDivisibleByThree($i)) 
                $result[$i] = 'fizz';

            else if ($this->isDivisibleByFive($i))
                $result[$i] = 'buzz';

            else
                $result[$i] = $i;
        }

        return join($result, ', ');
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
