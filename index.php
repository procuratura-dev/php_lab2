<!DOCTYPE html>
<html>
<body>

<?php
// $d=date("D");
// if ($d=="Fri")
// $message;
// $message = ($d == "Fri") ? "<br />Хороших вам выходных!" : "<br />Приятного рабочего дня, вам!";
// echo $message;


$d=date("D");
if ($d=="Fri")
echo "<br />Хороших вам выходных!";
elseif ($d=="Sun")
echo "<br />Завтра начинается новая рабочая 
неделя!";
else
echo "<br />Приятного рабочего дня, вам!";

?>

</body>
</html>