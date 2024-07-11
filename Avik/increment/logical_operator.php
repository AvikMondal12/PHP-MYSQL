<?php
// thhis is for or 
$var = (false or false);
echo var_dump($var);
echo "<br>";
$var = (false or true);
echo var_dump($var);
echo "<br>";
$var = (true or false);
echo var_dump($var);
echo "<br>";
$var = (true or true);
echo var_dump($var);
echo "<br>";

// echo var_dump($var);
// thhis is for and 
$var = (false and false);
echo var_dump($var);
echo "<br>";
$var = (false and true);
echo var_dump($var);
echo "<br>";
$var = (true and false);
echo var_dump($var);
echo "<br>";
$var = (true and true);
echo var_dump($var);
echo "<br>";

// echo var_dump($var);

// thhis is for not
$var = (true);
echo var_dump($var);
echo "<br>";
$var = (false );
echo var_dump($var);
echo "<br>";
// $var = (true or false);
// echor "<br>";
// $var = (true or true);
// echor "<br>";

// echo var_dump($var);

// this is for xor
$var = (false xor false);
echo var_dump($var);
echo "<br>";
$var = (false xor true);
echo var_dump($var);
echo "<br>";
$var = (true xor false);
echo var_dump($var);
echo "<br>";
$var = (true xor true);
echo var_dump($var);
echo "<br>";
?>

