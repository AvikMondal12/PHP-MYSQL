<?php
$name="My name is avik avik";
$len=strlen($name);     //**["strlen" keyword use for find the length of a string..]
echo ("The length of this string is :".$len);  


$len=str_word_count($name);   //***['str_word_count'  keyword use find how many word are present in this string]
echo "<br>"; 
echo ("The word of this string is :".$len); 


echo"<br>";
$name1="avik";
echo("The reverse string is : ".strrev($name1));    //***['strrev'  keyword use for reverse the string .]
echo"<br>";




$pos=(strpos($name,'is'));      //***['strpos'  this keyword use for find the position of a string]
echo ("The position of the length is :".$pos);



echo"<br>";
$replace=(str_replace("avik","Anushka", $name));  // ***['str_repalce' this keyword use for repalce a word in a string]
echo("The repalce string is :".$replace);

