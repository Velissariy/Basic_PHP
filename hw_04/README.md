Дан код:

class A { public function foo() { static $x = 0; echo ++$x; } } $a1 = new A(); 
$a2 = new A(); $a1->foo(); $a2->foo(); $a1->foo(); $a2->foo();

Что он выведет на каждом шаге? Почему?
$x — это статическая переменная: Она сохраняет свое значение между вызовами метода, но принадлежит классу A, а не конкретным объектам.

Первый вызов $a1->foo(): Статическая переменная $x была инициализирована значением 0. Затем выполняется ++$x, поэтому она становится 1, и выводится 1.
Второй вызов $a2->foo(): Так как это тот же класс A, то переменная $x уже равна 1. После инкремента она станет 2, и выводится 2.
Третий вызов $a1->foo(): Переменная $x уже равна 2, после инкремента она становится 3, и выводится 3.
Четвертый вызов $a2->foo(): Переменная $x теперь равна 3, после инкремента она станет 4, и выводится 4.

Немного изменим п.5
class A { public function foo() { static $x = 0; echo ++$x; } } class B extends A { } $a1 = new A(); 
$b1 = new B(); $a1->foo(); $b1->foo(); $a1->foo(); $b1->foo();

Что он выведет теперь?
$x статическая переменная существует отдельно для каждого класса, даже если класс B наследует от A.

Первый вызов $a1->foo(): Вызов метода foo() через объект класса A. Статическая переменная $x инициализируется как 0, затем инкрементируется до 1, и выводится 1.
Второй вызов $b1->foo(): Класс B наследует метод foo() от класса A, и метод выполняется с той же статической переменной $x, так как метод не был переопределен в классе B. Теперь переменная $x инкрементируется до 2, и выводится 2.
Третий вызов $a1->foo(): Статическая переменная $x все еще равна 2 (так как она хранится на уровне класса A), теперь инкрементируется до 3, и выводится 3.
Четвертый вызов $b1->foo(): Несмотря на то, что метод вызывается через объект класса B, он все равно использует ту же самую статическую переменную $x из класса A. После инкремента она становится 4, и выводится 4.
Статическая переменная $x привязана к методу foo() в классе A, и поскольку метод не был переопределен в классе B, оба объекта ($a1 и $b1) используют одну и ту же переменную $x.