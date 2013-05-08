<?php
/*
 * Title: Multiples of 3 and 5
 * Link: http://projecteuler.net/problem=1
 *
 * Problem: If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9.
 * The sum of these multiples is 23. Find the sum of all the multiples of 3 or 5 below 1000.
 */

function sum_of_multiples($max = 0)
{
    $total = 0;

    for($i = 1; $i < $max; $i++) {
        $total += (!($i % 3) || !($i % 5)) ? $i : 0;
    }

    return $total;
}

print sum_of_multiples(1000);