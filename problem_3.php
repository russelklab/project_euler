<?php
/*
$number = 600851475143;
$number = 2012121;
$number = 13195;

function prime_factors(&$number, &$factors = array()) {

    if($number < 2) {
        return $number;
    }

    for($i = 2; $i <= $number; ++$i) {
        if(!($number % $i)) {
            prime_factors($half, $factors);
        }
    }
}

$primes = array();
prime_factors($number, $primes);

ksort($primes);

Answer: 71 x 839 x 1471 x 6857
*/

function test($number, $factors = array()) {
    for($i = 2; $i <= $number; $i++) {
        $div = $number/$i;

        if(!($number % $i) && !is_float($div)) {
            $number = $number / $i;

            $factors[$i] = true;
            $factors[$number] = true;
        }
    }

    return $factors;
}

$number = 600851475143;
$factors = test($number);
ksort($factors);
var_dump($factors);