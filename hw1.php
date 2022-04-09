<?php
function my_print($str){
	print($str . "<br/>");
}
//task 0

CONST test_const = 'asd';
$user_name = "Vlad";
$age = 24;

function show_something()
{
    return 'SOMETHING';
}
function say_hi()
{
    'hi';
}

//task 1
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

//task 2

CONST imgs = 80;
CONST fel_pen = 23;
CONST pencil = 40;

function get_paint_count()
{
    my_print(imgs - fel_pen - pencil);
    my_print("");
}
get_paint_count();

//task 3

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

//task 4

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

//task 5

$bmw = [
	"name" => "bmw",
	"model" => "X25",
	"speed" => 500,
	"doors" => 4,
	"year" => 2045,
];
$toyota = [
	"name" => "toyota",
	"model" => "T21",
	"speed" => 20,
	"doors" => 1,
	"year" => 1789,
];
$opel = [
	"name" => "opel",
	"model" => "OX431",
	"speed" => 30,
	"doors" => 3,
	"year" => 2000,
];

function get_car_info($car){
	my_print("Car " . $car["name"]);
	my_print($car["model"] . " " . $car["speed"] . " " . $car["doors"] . " " . $car["year"]);
}

get_car_info($bmw);
get_car_info($toyota);
get_car_info($opel);

//task 6

function get_table(){
	echo "<table style=\"border: 1px solid #777;\">";
	echo "<tbody>";
	for($i = 1; $i < 11; $i++){
		echo "<tr>";
		for($j = 1; $j < 11; $j++){
			$r = $i * $j;
			echo "<td style=\"border:1px solid #777;min-width:25px;text-align:center;\">";
			if (r % 2 == 0) 
			{ 
				$r = '(' . $r . ')'; 
			} elseif (r % 2 != 0) 
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




