<?php

function prime_numbers($argv)
{
    $nbDiv = 0;
    $nbr = $argv[1];
    for ($j = 1; $j <= $nbr; $j++) {
        if ($nbr % $j == 0) {
            $nbDiv++;
        }
    }

    if ($nbDiv == 2) {
	echo "\033[32mSuccès: Ce nombre est un nombre premier !\n\033[0m";
	return true;
    }

    echo "\033[31mErreur: Ce nombre n'est pas un nombre premier.\n\033[0m";
    return false;

}
prime_numbers($argv);
