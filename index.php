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

?>

</body>
</html>