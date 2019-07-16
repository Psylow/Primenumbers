<?php

function prime_numbers($nbr)
{
    $nbDiv = 0;
    for ($j = 1; $j <= $nbr; $j++) {
        if ($nbr % $j == 0) {
            $nbDiv++;
        }
    }
    if ($nbDiv == 2) {
        return true;
    } else {
        return false;
    }
}
prime_numbers();
