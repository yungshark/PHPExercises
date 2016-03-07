<?php

// TODO: Create your inspect() function here
function inspect($var) {

	$type = gettype($var);

		if(is_null($var)) {
			return "The value is NULL";
		} else if(is_bool($var)) {
			if($var) {
				return "The variable is true";
			} else {
				return "The variable is false";
			}
		} else if(is_string($var)) {
			if(empty($var)) {
				return "This is an empty string!";
			} else {
				return "The $type is $var";
			}
		} else if(is_array($var)) {
			if(empty($var)) {
				return "This is an empty array!";
			} else {
				return "This is an array!";
			}
		} else if(is_numeric($var)) {
			return "This is a number!";
		}		
	}


// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
echo (inspect($num1) . PHP_EOL);

echo 'Inspecting $num2:' . PHP_EOL;
echo (inspect($num2) . PHP_EOL);

echo 'Inspecting $num3:' . PHP_EOL;
echo (inspect($num3) . PHP_EOL);

echo 'Inspecting $num4:' . PHP_EOL;
echo (inspect($num4) . PHP_EOL);

echo 'Inspecting $null:' . PHP_EOL;
echo (inspect($null) . PHP_EOL);

echo 'Inspecting $bool1' . PHP_EOL;
echo (inspect($bool1) . PHP_EOL);

echo 'Inspecting $bool2' . PHP_EOL;
echo (inspect($bool2) . PHP_EOL);

echo 'Inspecting $string1' . PHP_EOL;
echo (inspect($string1) . PHP_EOL);

echo 'Inspecting $string2' . PHP_EOL;
echo (inspect($string2) . PHP_EOL);

echo 'Inspecting $array1' . PHP_EOL;
echo (inspect($array1) . PHP_EOL);

echo 'Inspecting $array2' . PHP_EOL;
echo (inspect($array2) . PHP_EOL);
