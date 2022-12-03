<?php

// Advent of Code 2022  Olivier Lvl 3

$data = file_get_contents('input.txt');
$arr_data = preg_split('/\n+/', $data, -1, PREG_SPLIT_NO_EMPTY);
$totaal1 = 0;
$totaal2 = 0;

function valaantal(string $char)
{
	return ord($char)>=97?ord($char) - ord('a')+1:ord($char) - ord('A')+27;
}

// Deel 1
foreach ($arr_data as $rugzak) {
	$middle = floor(strlen($rugzak) / 2);
	$string1 = str_split(substr($rugzak, 0, $middle));
	$string2 = str_split(substr($rugzak, $middle));
	$result = array_intersect($string1, $string2);
	$totaal1 += valaantal(implode($result));
}
var_dump($totaal1); 

// Deel 2
for ($i=0; $i < count($arr_data) ; $i+=3) { 
	$string1 = str_split($arr_data[$i]);
	$string2 = str_split($arr_data[$i+1]);
	$string3 = str_split($arr_data[$i+2]);
	$result = array_intersect($string1, $string2, $string3);
	$totaal2 += valaantal(implode($result));
}
var_dump($totaal2); 
