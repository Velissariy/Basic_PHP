<?php
//Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
// где $arg1, $arg2 – значения аргументов,
// $operation – строка с названием операции.
// В зависимости от переданного значения операции выполнить одну
// из арифметических операций (использовать функции из пункта 3)
// и вернуть полученное значение (использовать switch).


function mathOperation($arg1, $arg2, $operation) {
  switch ($operation) {
    case 'add':
      return $arg1 + $arg2;
    case 'subtract':
      return $arg1 - $arg2;
    case 'multiply':
      return $arg1;
      return $arg2;
    case 'divide':
      if ($arg2 == 0) {
        return "Деление на ноль недопустимо";
      } else {
        return $arg1 / $arg2;
      }
    default:
      return "Неверная операция";
  }
}

$result = mathOperation(7, 3, 'add');
echo "Результат сложения: " . $result;
echo "\n";
$result = mathOperation(10, 2, 'divide');
echo "Результат деления: " . $result;
echo "\n";
$result = mathOperation(7, 4, 'invalid');
echo "Результат: " . $result;



