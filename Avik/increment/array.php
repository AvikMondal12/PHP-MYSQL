<?php
$arr=array("Kuntal","Manish","Avik","Suman","Diya","Jinal","Anushka","Rohan","Avik","Zeedan");
// $arr=array(2,3,3,4,5,6);
echo "Names are :";
foreach($arr as $value){
echo "  ".$value;
    // echo "<br>";
}
echo "<br>";
// echo "<br>";
echo "Names with sorting order :";
sort($arr);
foreach($arr as $value){
    echo "  ".$value;
    
}
echo "<br>";
echo "Array unique :";
$unique=array_unique($arr);
foreach($unique as $value){
    echo "  ".$value;
}
echo "<br>";
echo "Remove last element :";
array_splice($arr, 9, 1);
var_dump($arr);

echo "<br>";

$reverse=array_reverse($arr);
echo "Array in reverse order :";
foreach($reverse as $value){
    echo "  ".$value;
    
}
echo "<br>";
echo "Insert new element:";
$arr[5]="Ratul";
var_dump($arr)

?>