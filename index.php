<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="style.css">
</head>

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

echo "<br/>";

$today = date("l");

if($today == "Monday" || "Wednesday" || "Friday"){
    $table_date1 = "8:00-12:00";
    $table_date2 = "Нерабочий день";
}
elseif($today == "Tuesday" || "Thursday" || "Saturday"){
    $table_date1 = "Нерабочий день";
    $table_date2 = "12:00-16:00";
}
else{
    $table_date1 = "Нерабочий день";
    $table_date2 = "Нерабочий день";
}

?>

<table class="iksweb">
	<tbody>
		<tr>
			<td class="header" colspan="3"><b>График работы докторов, каб. 333</td>
		</tr>
		<tr class="line_color">
			<td>П.н.</td>
			<td>Фамилия, имя</td>
			<td>График</td>
		</tr>
		<tr>
			<td>1.</td>
			<td>Аксенти Елена</td>
			<td><?php echo $table_date1; ?></td>
		</tr>
		<tr>
			<td>2.</td>
			<td>Петрова Мария</td>
			<td><?php echo $table_date2; ?></td>
		</tr>
	</tbody>
</table>


</body>
</html>