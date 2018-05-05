<?php
header('Content-Type: text/plain');
$primeNumbers = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29];
echo "Prime numbers: \n";
foreach ($primeNumbers as $number) {
    echo $number . " ";
}
echo "\n";

$descriptionOfFunctions = [
    "count" => "Подсчитывает количество элементов массива или что-то в объекте",
    "is_array" => "Определяет, является ли переменная массивом",
    "array_merge" => "Сливает один или большее количество массивов",
    "empty" => "Проверяет, пуста ли переменная",
    "print_r" => "Выводит удобочитаемую информацию о переменной"
];
echo "\n";
echo "Functions with descriptions: \n";
foreach ($descriptionOfFunctions as $key => $function) {
    echo "'$key'" . " => $function \n";
}
echo "\n";

$matrix4x4 = [
    [1, 0, 0, 0],
    [0, 1, 0, 1],
    [0, 0, 1, 0],
    [0, 0, 0, 1]
];
echo "Matrix 4x4: \n";
for ($i = 0; $i < count($matrix4x4); ++$i) {
    for ($j = 0; $j < count($matrix4x4[$i]); ++$j) {
        echo $matrix4x4[$i][$j];
    }
    echo "\n";
}