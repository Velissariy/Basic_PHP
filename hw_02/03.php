<?php
//Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений - массивы
// с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
// Московская область: Москва, Зеленоград, Клин Ленинградская область: Санкт-Петербург, Всеволожск, Павловск, Кронштадт
// Рязанская область ... (названия городов можно найти на maps.yandex.ru)
//Пример вывода программы
//- Мое	ють:
//	 Москва
//	 Зеленоград
//	Клин

$regions = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Касимов', 'Шацк'],
];

foreach ($regions as $region => $cities) {
    echo "- " . $region . ":\n";
    foreach ($cities as $city) {
        echo "--- " . $city . "\n";
    }
    echo "\n";
}
