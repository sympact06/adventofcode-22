<?php

// Advent of Code 2022 -  Olivier Lvl 2

$data = file_get_contents('input.txt');
$arr_data = preg_split('/\n+/', $data, -1, PREG_SPLIT_NO_EMPTY);

$arr_score = [
	"B X" => [1,1],
	"C Y" => [2,6],
	"A Z" => [3,8],
	"A X" => [4,3],
	"B Y" => [5,5],
	"C Z" => [6,7],
	"C X" => [7,2],
	"A Y" => [8,4],
	"B Z" => [9,9]
];

$totaalscore1 = 0;
$totaalscore2 = 0;

foreach ($arr_data as $key => $value) {
	$totaalscore1 += $arr_score[$value][0];
	$totaalscore2 += $arr_score[$value][1];
}

var_dump($totaalscore1);
var_dump($totaalscore2);
