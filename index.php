<!DOCTYPE html>
<html>
<body>

<?php
// $d=date("D");
// if ($d=="Fri")
// $message;
// $message = ($d == "Fri") ? "<br />Хороших вам выходных!" : "<br />Приятного рабочего дня, вам!";
// echo $message;


$d=date("w");
if ($d=="4")
echo "<br />Хороших вам выходных!";
elseif ($d=="2")
echo "<br />Сегодня универ!";
else
echo "<br />Приятного рабочего дня, вам!";

echo "<br/>";
// echo date("l");
// echo date("j, n, Y");

switch(date("l")){
    case "Monday":
        echo "Сегодня " . date("l") . "," . date("j, n, Y");
        break;
    case "Tuesday":
        echo "Сегодня " . date("l") . "," . date("j, n, Y");
        break;
    case "Wednesday":
        echo "Сегодня " . date("l") . "," . date("j, n, Y");
        break;
    case "Thursday":
        echo "Сегодня " . date("l") . "," . date("j, n, Y");
        break;
    case "Friday":
        echo "Сегодня " . date("l") . "," . date("j, n, Y");
        break;
    case "Saturday":
        echo "Сегодня " . date("l") . "," . date("j, n, Y");
        break;
    case "Sunday":
        echo "Сегодня " . date("l") . "," . date("j, n, Y");
        break;
}

?>

</body>
</html>