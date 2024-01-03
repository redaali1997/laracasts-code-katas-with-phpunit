<?php

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    function test_it_generates_prime_factors()
    {
        $factors = new PrimeFactors();

        $this->assertEquals([2, 5, 5], $factors->generate(50));
    }
}
