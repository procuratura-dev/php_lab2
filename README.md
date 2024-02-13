#Задание 1.

Этот PHP-скрипт выполняет следующие действия:
Создаются две переменные $nume и $prenume, содержащие значения 'Иванов' и 'Николай' соответственно.
С помощью оператора echo выводится строка, содержащая текст и значения переменных $nume и $prenume.
Создается переменная $varsta со значением 30.
С использованием оператора print выводится еще одна строка, содержащая текст и значение переменной $varsta.

![alt text](images/image1.png)

Скрипт правильно выполняет работу и выводит нужную информацию.

#Задание 2.

![alt text](images/image2.png)

Этот PHP-скрипт проверяет текущий день недели и выводит соответствующее сообщение в зависимости от результата.


Заменил if else на тернарный операторы и получилось:
$d=date("D");
if ($d=="Fri")
$message;
$message = ($d == "Fri") ? "<br />Хороших вам выходных!" : "<br />Приятного рабочего дня, вам!";
echo $message;

Скрипт выводит ту же информацию, только другим способом.

Добавил дополнительное условие:
$d=date("D");
if ($d=="Fri")
echo "<br />Хороших вам выходных!";
elseif ($d=="Sun")
echo "<br />Завтра начинается новая рабочая 
неделя!";
else
echo "<br />Приятного рабочего дня, вам!";

Сегодня Tue, поэтому результат вывода не поменялся, но если был бы день недели Sun, то вывод был бы:
Завтра начинается новая рабочая


Выполнил замену буквенного параметра дня недели на цифры, изменив параметр D на w:

$d=date("w");
if ($d=="4")
echo "<br />Хороших вам выходных!";
elseif ($d=="6")
echo "<br />Завтра начинается новая рабочая 
неделя!";
else
echo "<br />Приятного рабочего дня, вам!";

Изменил условие, чтобы оно выполнялось сегодня, w=2:

$d=date("w");
if ($d=="4")
echo "<br />Хороших вам выходных!";
elseif ($d=="2")
echo "<br />Сегодня универ!";
else
echo "<br />Приятного рабочего дня, вам!";

Результат работы скрипта:

![alt text](images/image3.png)
