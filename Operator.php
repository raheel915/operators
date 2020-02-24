<!DOCTYPE html>
<html>
<head>
	<title>Task</title>
</head>
<body>
	<?php


echo strlen("raheel");

echo "<br>";


echo str_word_count("Hello World");

echo "<br>";

echo strrev("UsamaL");

echo "<br>";

echo strpos("Hello world","world");

echo "<br>";

define ("Greeting","Welcome");
echo Greeting;

echo "<br>";

echo str_replace("World", "APtech", "Hello World");

echo "<h1>Operators</h1>";

/**Arithematic Operator **/

$a=70;
$b=80;
$z=$a + $b;

echo $z;

echo "<br>";

$z=$a - $b;

echo $z;
echo "<br>"; 

$z=$a / $b;

echo $z;
echo "<br>";

$z=$a * $b;
echo $z;

$c=2;  
$d=4;
$e=$c % $d;

echo $e;

echo "<br>";



echo "<h2>Assignmet Opereator</h2>";
echo "<br>";

$c=10;
$d=5;

$c=$d;
echo $c;
echo "<br>";




echo "<h2>Comperision Operator</h2>";

$x=10;
$y=10;
var_dump($x == $y);
echo "<br>";

var_dump($x != $y);
echo "<br>";

var_dump($x > $y);
echo "<br>";


var_dump($x < $y);
echo "<br>";

var_dump($x >= $y);
echo "<br>";

var_dump($x <= $y);
echo "<br>";

echo "<h2>Logical Operator</h2>";

$q=5;
$w=6;
$r=6;

var_dump($q == $w AND $q == $r);

echo "<br>";

var_dump($q == $w OR $w == $r);
echo "<br>";
var_dump($q == $w XOR $w == $r);

echo "<br>";





?>
</body>
</html>