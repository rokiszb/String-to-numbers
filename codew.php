<?php

$alphabet = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
    'd' => 4,
    'e' => 5,
    'f' => 6,
    'g' => 7,
    'h' => 8,
    'i' => 9,
    'j' => 10,
    'k' => 11,
    'l' => 12,
    'm' => 13,
    'n' => 14,
    'o' => 15,
    'p' => 16,
    'q' => 17,
    'r' => 18,
    's' => 19,
    't' => 20,
    'u' => 21,
    'v' => 22,
    'w' => 23,
    'x' => 24,
    'y' => 25,
    'z' => 26
];

function alphabet_position(string $s): string {
    function myfunction($v)
    {
        global $alphabet;
        return $alphabet[$v];
    }
    $result = strtolower(preg_replace("/[^a-zA-Z]+/", "", $s));
    $exploded = (str_split($result));
    $converted = array_map("myfunction",$exploded);
    $converted = implode(" ",$converted);
    return $converted;
}

var_dump(alphabet_position('The narwhal bacons at midnight.'));