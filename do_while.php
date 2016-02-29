<?php

$a = 0;
$b = 2;
do { 
	echo "$a\n";
	$a += 2;
} while ($a <= 100);

do {
	echo "$a\n";
	$a -= 5;
} while ($a >= -10);

do {
	echo "$b\n";
	$b = $b * $b;
} while ($b < 1000000);