<?php

namespace spec;

use FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    /** @test */
    public function it_translates_1()
    {
        $this->translate(1)->shouldReturn(1);
    }

    /** @test */
    public function it_translates_2()
    {
        $this->translate(2)->shouldReturn(2);
    }

    /** @test */
    public function it_translates_3()
    {
        $this->translate(3)->shouldReturn('fizz');
    }

    /** @test */
    public function it_translates_4()
    {
        $this->translate(4)->shouldReturn(4);
    }

    /** @test */
    public function it_translates_5()
    {
        $this->translate(5)->shouldReturn('buzz');
    }

    /** @test */
    public function it_translates_10()
    {
        $this->translate(10)->shouldReturn('buzz');
    }

    /** @test */
    public function it_counts_to_15()
    {
        $this->countTo(15)->shouldReturn([1, 2, 'fizz', 4, 'buzz', 'fizz', 7, 8, 'fizz', 'buzz', 11, 'fizz', 13, 14, 'fizzbuzz']);
    }
}
