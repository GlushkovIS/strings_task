<?php

echo '<pre>';

$strArr = [
    'One',
    'Two',
    'Twenty',
    'Аааааа - ru',
    'Afffff',
    'Aaaaaa - en',
];

/**
 * Задание №1
 */

usort($strArr, 'strcmp');
print_r($strArr);

/**
 * Задание №2
 */

$str = 'AAbBbbCcCcAAa';

$strArr = str_split($str);

$previousSymbol = false;
foreach ($strArr as $key => $symbol) {
    if ($previousSymbol === $symbol) {
        unset($strArr[$key]);
        continue;
    }
    $previousSymbol = $symbol;
}
echo implode('', $strArr);

/**
 * Задание №3
 */

$string = 'AAbBbbCcCcAAa';

$stringArr = str_split($string);

$previousSym = false;
foreach ($stringArr as $key => $sym) {
    if (strcasecmp($previousSym, $sym) === 0) {
        unset($stringArr[$key]);
        continue;
    }
    $previousSym = $sym;
}

echo '<br>' . implode('', $stringArr);



