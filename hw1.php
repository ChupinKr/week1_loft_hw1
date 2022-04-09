<?php
function my_print($str){
	print($str . "<br/>");
}
echo "</br>task 0</br>";

CONST test_const = 'asd';
$user_name = "Vlad";
$age = 24;

function show_something()
{
    return 'SOMETHING';
}
function say_hi()
{
    echo 'hi</br>';
}

echo "</br>task 1</br>";

$user_name = "Vlad";
$age = 24;
function say_name($name)
{
    my_print("My name is $name");
}
function say_age($age)
{
    my_print("Im " . (string)$age . " age old");
}
function say_symbols()
{
    my_print('“!|/’”\\');
}
say_name($user_name);
say_age($age);
say_symbols();

echo "</br>task 2</br>";

CONST imgs = 80;
CONST fel_pen = 23;
CONST pencil = 40;

function get_paint_count()
{
    my_print(imgs - fel_pen - pencil);
    my_print("");
}
get_paint_count();

echo "</br>task 3</br>";

$age = rand(0,200);
function get_age_fact($age)
{
	my_print($age . "");
	if($age <= 65 && $age >= 18){
       my_print("You still have to work and work");
	}elseif($age > 65){
		my_print("It's time for you to retire");
	}elseif($age <= 18 && $age >= 1){
		my_print("It's too early for you to work");
	}elseif($age < 1){
		my_print("Unknown age");
	}
}
get_age_fact($age);

echo "</br>task 4</br>";

$day = rand(0, 7);
function get_day_info($day)
{
	switch ($day) {
		case 1:
			my_print("This is work day");
			break;
		case 2:
			my_print("This is work day");
			break;
		case 3:
			my_print("This is work day");
			break;
		case 4:
			my_print("This is work day");
			break;
		case 5:
			my_print("This is work day");
			break;
		case 6:
			my_print("This is weekend");
			break;
		case 7:
			my_print("This is weekend");
			break;
		default:
			my_print("Unknown day");
			break;
	}
}
get_day_info($day);

echo "</br>task 5</br>";

$cars = [
	"bmw" => [
	"model" => "X25",
	"speed" => 500,
	"doors" => 4,
	"year" => 2045],
	
	"opel" => [
	"model" => "T21",
	"speed" => 20,
	"doors" => 2,
	"year" => 1555],
	
	"toyota" => [
	"model" => "OX431",
	"speed" => 500,
	"doors" => 3,
	"year" => 1444],
];

function get_cars_info($cars){
	foreach($cars as $car => $value){
		echo $car . "</br>" . implode(' ', $value). "</br>". "</br>";
	}
}

get_cars_info($cars);

echo "</br>task 6</br>";

function get_table(){
	echo "<table style=\"border: 1px solid #000000;\">";
	echo "<tbody>";
	for($i = 1; $i < 11; $i++){
		echo "<tr>";
		for($j = 1; $j < 11; $j++){
			$r = $i * $j;
			echo "<td style=\"border:1px solid #000000;min-width:25px;text-align:center;\">";
			if (($i % 2) == 0 && ($k % 2) == 0) 
			{ 
				$r = '(' . $r . ')'; 
			} elseif ($i % 2) != 0 && ($k % 2) != 0) 
			{ 
				$r = '[' . $r . ']'; 
			} 
			echo $r;
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</tbody>";
	echo "</table>";
}
get_table();

?>




