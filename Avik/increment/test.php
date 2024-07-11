<?php

$string="php Program - the complete SOLUTION for WEB development";

$upper=strtoupper ( $string );
echo $upper;
echo "<br>";

$lower=strtolower($string);
echo $lower;
echo "<br>";


$fristcharecter= ucfirst($string);
echo $fristcharecter;
echo "<br>";

$n = 11; // Number of characters to extract from the end
$lastNCharacters = substr($string, -$n);
echo  $lastNCharacters;
echo "<br>";


$replace=(str_replace("the","best", $string));
echo "Replace 'best 'from 'the' : " .$replace;
echo "<br>";

$arr = explode(' ', trim($string)); 
  
echo "The second word of string is: " . $arr[1];
echo "<br>";

$insert= substr_replace( $string, "is the  ", '4',0 );
echo $insert;

?>