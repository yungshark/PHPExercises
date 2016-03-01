<?php

$data = array("booty", 69, true, null, array(1, 3, 5), (string) "1 + 1");

foreach ($data as $datum) {
	if (is_integer($datum)){
		echo ("{$datum} is an integer" . PHP_EOL);
	} else if (is_string($datum)){
		echo ("{$datum} is a string" 	. PHP_EOL);
	} else if (is_array($datum)){
		echo ("{$datum} is an array" 	. PHP_EOL);
	} else if (is_bool($datum)){
		echo ("{$datum} is a boolean" 	. PHP_EOL);
	} else if (is_null($datum)){
		echo ("{$datum} is null" 		. PHP_EOL);
	} else if (is_float($datum)){
		echo ("{$datum} is float"		. PHP_EOL);
	}
	
}

echo (PHP_EOL);
echo (PHP_EOL);

foreach ($data as $datum) {
	if (is_scalar($datum)){
		echo ("$datum is scalar" . PHP_EOL);
	}
}

echo (PHP_EOL);
echo (PHP_EOL);

foreach ($data as $datum) {
	if (is_array($datum)) {
		echo (implode(', ', $data) . PHP_EOL);
	}
}
?>