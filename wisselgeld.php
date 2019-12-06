<?php

$input = intval($argv[1]);
$geld = floor($input / 10);
if ($geld > 0) {
    echo $geld . " x 10 euro" . PHP_EOL;
}
$input %= 10;
$geld2 = floor($input / 5);
if ($geld2 > 0) {
    echo $geld2 . " x 5 euro" . PHP_EOL;
}
$input %= 5;
$geld3 = floor($input / 2);
if ($geld3 > 0) {
    echo $geld3 . " x 2 euro" . PHP_EOL;
}
$input %= 2;
$geld4 = $input;
if ($geld4 > 0) {
    echo $geld . " x 1 euro" . PHP_EOL;
}
?>