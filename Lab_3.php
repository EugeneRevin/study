<?php
//завдання 1
function findElementByIndex(array $arr, int $index)
{
    $result = [];
    $iterator = function ($arr, $index) use (&$result, &$iterator) {
        foreach ($arr as $key => $value) {
            if ($key === $index) {
                $result[] = $value;
            }
            if (is_array($value)) {
                $iterator($value, $index);
            }
        }
    };
    $iterator($arr, $index);
    return $result;
}

$arr = [
    'a' => [1, 2, 3],
    'b' => [
        0 => 'zero',
        1 => 'one',
        2 => ['two', 2 => 'three'],
    ],
    'c' => [5, 6, 7],
];

$index = random_int(0,2);
echo "Усі елементи під номером: $index\n";
$result = findElementByIndex($arr, $index);
print_r($result);

//завдання 2
$str = '';
for ($i = 0; $i < 10; $i++) {
    $str .= (rand(0, 1) === 0) ? 'a' : 'b';
}
function count_b($str) {
    if (!is_string($str)) {
        echo "Передано не строку, функція повернула значення false";
        return false;
    }
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === 'b') {
            $count++;
        }
    }
    return $count;
}
$num = 123;
echo "Усі b зі строки : $str\n";
echo count_b($str). "\n";
echo count_b($num). "\n";

//завдання 3
function countElements($array) {
    $keyCount = 0;

    foreach ($array as $key => $value) {
        $keyCount++;

        if (is_array($value)) {
            foreach ($value as $subKey => $subValue) {
                $keyCount++;
            }
        }
    }
    return $keyCount;
}

$arr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'foure' => 5,
    'five' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
    ],
];
$result = countElements($arr);
echo "Кількість елементів у масиві: $result\n";

//завдання 4
function countSquares($a, $b): float
{
    $countWidth = $a / $b;
    $countHeight = $a / $b;

    $totalSquares = $countWidth * $countHeight;

    return $totalSquares;
}

$bigSquare = rand(5, 40);
$smallSquare = rand(1, $bigSquare - 1);
echo "Розмір великого квадрата: $bigSquare\n";
echo "Розмір маленького квадрата: $smallSquare\n";
echo countSquares($bigSquare, $smallSquare) . "\n";
echo "Приклад з цілим поділом:\n";
var_dump(countSquares(2, 1));
?>
