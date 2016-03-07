<?php



physicistsString = "Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark";

$physicistsArray = explode(', ', $physicistsString);

$famousFakePhysicists = humanizedList($physicistsArray);

echo "Some of the most famous fictional theortical physicists are $famousFakePhysicists." . PHP_EOL;

function humanizedList($array, $aSort = false) {
	if ($aSort) {
		sort($array);
	}
	$lastValue = array_pop($array);
	$arrayString = implode(', ', $array);
	$arrayString = $arrayString . ', and ' . $lastValue
	return $arrayString;
}