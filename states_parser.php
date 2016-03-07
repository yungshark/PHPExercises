<?php

$arrayOfStrings = explode(PHP_EOL, $contentString)

$arrayOfStates = [];
// anytime we build an array, we probably need to foreach it. - ryan
foreach($arrayOfStrings as $string) {
	stateAssociativeArray = [];
	$stateInfo = eplode(",", $string);
	$abbreviation = $stateInfo[0];
	$stateName = $stateInfo[1];
	$stateAssociativeArray[$abbreviation] = $stateName;
	$arrayOfStates[] = $stateAssociativeArray
	print_r($arrayOfStates);
}