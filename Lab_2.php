<?php
// перше завдання
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];


echo "Довжина масива: " . count($arr) . "\n";

$new_arr = $arr;
for ($i = 0; $i < 4; $i++) {
    $element = array_shift($new_arr);
    array_push($new_arr, $element);
}
echo "Масив після переміщення перших 4 елементів: \n";
print_r($new_arr);


$sum = $arr[3] + $arr[4] + $arr[5];
echo "Сума 4, 5, 6 елементів: " . $sum . "\n";

//друге завдання
$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];

$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];

echo "Усі елементи, яких нема у першому масиві, але є у другому:\n";
print_r(array_diff($secondArr, $firstArr));

echo "Усі елементи, які є у першому масиві, але нема у другому:\n";
print_r(array_diff($firstArr, $secondArr));

echo "Усі елементи, які співпадають в обох масивах\n";
print_r(array_intersect($firstArr, $secondArr));

$firstArrWithNewKeys = array_map(function ($key) {
    return 'first_' . $key;
}, array_keys($firstArr));

$secondArrWithNewKeys = array_map(function ($key) {
    return 'second_' . $key;
}, array_keys($secondArr));

$firstArrModified = array_combine($firstArrWithNewKeys, $firstArr);
$secondArrModified = array_combine($secondArrWithNewKeys, $secondArr);

$diffFirst = array_diff($firstArrModified, $secondArrModified);
$diffSecond = array_diff($secondArrModified, $firstArrModified);

echo "Усі елементи, які різняться\n";
print_r(array_merge($diffFirst, $diffSecond));

//Третє завдання
$firstArr = [
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

$secondElements = [];
foreach ($firstArr as $key => $value) {
    if (is_array($value)) {
        $keys = array_keys($value);
        if (isset($keys[1])) {
            $secondElements[] = $value[$keys[1]];
        }
    }
}
echo "Другі елементи вкладених масивів: ";
print_r($secondElements);

$keyCount = 0;
foreach ($firstArr as $key => $value) {
    $keyCount++;
    if (is_array($value)) {
        foreach ($value as $subKey => $subValue) {
            $keyCount++;
        }
    }
}
echo "Кількість елементів (включно з вкладеними): $keyCount\n";

$totalSum = 0;
foreach ($firstArr as $key => $value) {
    if (is_array($value)) {
        $totalSum += array_sum($value);
    } else {
        $totalSum += $value;
    }
}
echo "Сума усіх значень в масиві: $totalSum\n";