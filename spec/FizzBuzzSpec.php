<?php

namespace spec;

use FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    /** @test */
    public function it_counts_to_1()
    {
        $this->countTo(1)->shouldReturn('1');
    }

    /** @test */
    public function it_counts_to_2()
    {
        $this->countTo(2)->shouldReturn('1, 2');
    }

    /** @test */
    public function it_counts_to_3()
    {
        $this->countTo(3)->shouldReturn('1, 2, fizz');
    }

    /** @test */
    public function it_counts_to_4()
    {
        $this->countTo(4)->shouldReturn('1, 2, fizz, 4');
    }

    /** @test */
    public function it_counts_to_5()
    {
        $this->countTo(5)->shouldReturn('1, 2, fizz, 4, buzz');
    }

    /** @test */
    public function it_counts_to_6()
    {
        $this->countTo(6)->shouldReturn('1, 2, fizz, 4, buzz, fizz');
    }

    /** @test */
    public function it_counts_to_7()
    {
        $this->countTo(7)->shouldReturn('1, 2, fizz, 4, buzz, fizz, 7');
    }

    /** @test */
    public function it_counts_to_8()
    {
        $this->countTo(8)->shouldReturn('1, 2, fizz, 4, buzz, fizz, 7, 8');
    }

    /** @test */
    public function it_counts_to_9()
    {
        $this->countTo(9)->shouldReturn('1, 2, fizz, 4, buzz, fizz, 7, 8, fizz');
    }

    /** @test */
    public function it_counts_to_10()
    {
        $this->countTo(10)->shouldReturn('1, 2, fizz, 4, buzz, fizz, 7, 8, fizz, buzz');
    }

    /** @test */
    public function it_counts_to_15()
    {
        $this->countTo(15)->shouldReturn('1, 2, fizz, 4, buzz, fizz, 7, 8, fizz, buzz, 11, fizz, 13, 14, fizzbuzz');
    }
}
