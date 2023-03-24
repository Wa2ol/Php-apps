
 
<?php
//elzero
// 6 => 12

//1
echo (int)(15.2 + 14.7) + (10.5 + 10.5); // 50
echo '</br>';
echo gettype((int)(15.2 + 14.7) + (int)(10.5 + 10.5)); // Integer

echo '</br>';
echo '</br>';
//--------------------------------------------------------------
//3 Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"

echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";

echo '</br>';
echo '</br>';
//--------------------------------------------------------------
//4 Needed Output
/*We
Love
Elzero
Web
School*/
echo nl2br("We
Love
Elzero
Web
School");

echo '</br>';
echo '</br>';
//--------------------------------------------------------------
//5
echo nl2br(<<<'Now'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
Now);

echo '</br>';
echo '</br>';
//--------------------------------------------------------------
//6

$something = "Programming";

echo <<<'code'
Hello \PHP\
We Love $something
code;

echo '</br>';

echo <<<"code"
Hello \PHP\
We Love $something
code;

echo '</br>';
echo '</br>';
//--------------------------------------------------------------
//7
echo (bool)"Hello PHP"; // 1
echo '<br>';
echo gettype((int)"Hello PHP"); // integer

echo '</br>';
echo '</br>';
//--------------------------------------------------------------
//8
echo'<pre>';
print_r([
    "FrontEnd" => [
        "0"=> "HTML",
        "1" => "CSS",
        "JS" => [
            "Vuejs"=>[
                "2" => "v2",
                "3" => "v3"
            ],
            "0" => "Reactjs",
            "1" => "Svelte"
        ]
        ],
    "BackEnd" => [
        "0" => "PHP",
        "1" => "MySQL",
        "2" => "Security"
    ],
    "Git",
    "Github",
    "Testing" => [
        "0" => "Unit Testing",
        "1" => "End To End",
        "2" => "Integration"
    ]
]);
echo'</pre>';

echo '</br>';
echo '</br>';
//========================================================
?>

<?php
// 13 =>19
//1
$username = "WAEL"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">
    <title>Welcome To <?php echo $username ?> Courses</title>
</head>
<body>
    <h1><?php echo $username ?> Courses</h1>
    <p>Here In <?php echo $username ?> Courses We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $username ?> Courses Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $username ?> Courses</footer>
</body>
</html>

<?php 
echo '</br>';
echo '</br>';
//2
$name = "elzero";
$$name = "Web";

echo $elzero;
echo '</br>';
echo $$name ;
echo '</br>';
echo "${$name}";
echo '</br>';

echo '</br>';
echo '</br>';
//--------------------------------------------------------------
//3

$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100

echo '</br>';
echo '</br>';
//--------------------------------------------------------------

//4

echo $_SERVER["DOCUMENT_ROOT"];
echo '</br>';
echo $_SERVER["SERVER_NAME"];
echo '</br>';
//echo $_SERVER[""];
echo '</br>';
//echo $_SERVER[""];
echo '</br>';


echo '</br>';
echo '</br>';
//--------------------------------------------------------------
//5

/*
break.

case.

class.

continue.

default.

do.

if

for.

foreach.

function.

*/
echo '</br>';
echo '</br>';
//--------------------------------------------------------------

//6

echo __LINE__;
echo '</br>';
echo __FILE__;
echo '</br>';
echo __DIR__;

echo '</br>';
echo '</br>';
//========================================================
?>

<?php 
// 20 =>29

//1
// Replace ? With Arithmetic Operators
// echo 10 ? 20 ? 15 ? 3 ? 190 ? 10 ? 400; // 0
echo 10 * 20 + 15 % 3 + 190 + 10 - 400; // 0

echo '</br>';
echo '</br>';
//--------------------------------------------------------------

//2
$a = "10";

echo (int)$a;
echo '</br>';
echo gettype($a*1);
echo '</br>';
echo '</br>';
echo (int)$a;
echo '</br>';
echo gettype($a*1);
echo '</br>';
echo '</br>';
echo (int)$a;
echo '</br>';
echo gettype((int)$a);

echo '</br>';
echo '</br>';
//--------------------------------------------------------------

//3 Needed Output -1



echo '</br>';
echo '</br>';
//--------------------------------------------------------------
//4
$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
echo '</br>';
var_dump($c >= $a); // True
echo '</br>';
var_dump($a <= $b); // True
echo '</br>';
var_dump($a <> $b); // True
echo '</br>';
var_dump($a != $c); // True
echo '</br>';
var_dump($a == $c); // True
echo '</br>';
var_dump(gettype($a) == gettype($b)); // True
echo '</br>';
var_dump(gettype($a) === gettype($b)); // True
echo '</br>';
var_dump(gettype((float) $a) !== gettype($b)); // True


echo '</br>';
echo '</br>';
//--------------------------------------------------------------
//5

$points = 10;

++$points;
++$points;
++$points;
echo $points; // 13
echo '</br>';
--$points;
--$points;
--$points;
--$points;
--$points;
echo $points; // 8;


echo '</br>';
echo '</br>';
//--------------------------------------------------------------
?>

<?php

