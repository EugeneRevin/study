<?php
// Дії з числами
echo "Залишок від ділення 7 на 3: " . (7 % 3) . "\n";
echo "Ціла частина ділення 7 на 7.15: " . intval(7 / 7.15) . "\n";
echo "Корінь із 25: " . sqrt(25) . "\n";

// Дії зі строками
$phrase = "Десять негритят пошли купаться в море";
$words = explode(' ', $phrase);

echo "4-е слово з фрази: " . ($words[3] ?? '') . "\n";
echo "17-й символ із фрази: " . (mb_substr($phrase, 16, 1) ?: 'Немає') . "\n";
echo "Фраза з великою першою буквою кожного слова: " . mb_convert_case($phrase, MB_CASE_TITLE, "UTF-8") . "\n";
echo "Довжина строки: " . mb_strlen($phrase) . " символів\n";

// Дії з логічними даними
echo "Чи вірно, що true дорівнює 1: " . ((true == 1) ? 'так' : 'ні') . "\n";
echo "Чи вірно, що false тотожне 0: " . ((false === 0) ? 'так' : 'ні') . "\n";
echo "Яка строка довша: 'three' чи 'три': " . ((strlen("three") > mb_strlen("три")) ? "'three'" : "'три'") . "\n";
$result1 = 125 * 13 + 7;
$result2 = 223 + 28 * 2;
if ($result1 > $result2) {
    echo "Більше число: " . $result1 . " (125 * 13 + 7)\n";
} else {
    echo "Більше число: " . $result2 . " (223 + 28 * 2)\n";
}