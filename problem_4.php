<?php

function php_reverse($num) {
    $str_num = (string) $num;
    $reverse = strrev($str_num);
    return (int) $reverse;
}

function palindrome() {
    $pal = 0;
    $lowest_multiplier = 0;

    for($a = 999; $a > 99; $a--) {
        for($b = 999; $b > 99; $b--) {
            $product = $a * $b;

            if($product == php_reverse($product)) {
                if($product > $pal) {
                    $pal = $product;

                    if($b > $lowest_multiplier) {
                        $lowest_multiplier = $b;
                    }
                }

                if($b > $lowest_multiplier) {
                    return $pal;
                }
            }
        }
    }

    return $pal;
}

echo palindrome();