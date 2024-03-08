<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<style>
* {box-sizing: border-box;}

/* body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
} */

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: white;
  color: black;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: green;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

</style>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="topnav">
  <a class="active" href="#home">PHP</a>
  <a href="#Home">Home</a>
  <a href="#about">Dropdown</a>
  <a href="#contact">Disable</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">search</button>
    </form>
  </div>
</div>   

<h1>Intro PHP...</h1>
<div class="container">
   
<?php
// echo "<br>";
echo "*********************************";
echo "<br>";
echo "The value of redius is: ";
$a=2;
echo $a;
echo "<br>";
echo "The area of circle is: ";
$result = 3.14*(($a*$a));
echo $result;
echo "<br>";
echo "*********************************";
echo "<br>";

echo "The value of side is: ";
$a=2;
echo $a;
echo "<br>";
echo "The area of squre is: ";
$result = ((4*$a));
echo $result;

echo "<br>";
echo "*********************************";
echo "<br>";

echo "The value of width is: ";
echo $w=4;
echo "<br>";
echo "The value of length is: ";
echo $l=5;
echo "<br>";
$result=($w*$l);
echo "The area of rectangle is: ";
echo $result;

echo "<br>";
echo "*********************************";
echo "<br>";
echo "The value of hight is: ";
echo $w=4;
echo "<br>";
echo "The value of base is: ";
echo $l=5;
echo "<br>";
$result=($w*$l)/2;
echo "The area of triangle is: ";
echo $result;
?>
</div>

<!-- condition -->
<h1>----------------------------------------------------------------------------------------------------</h1>
<h2>Conditional Statement.....</h2>
<div class="cont">
<?php
// echo "<br>";
echo "<br>*********************************";
echo "<br>";
echo $a=6;
echo "<br>";
if($a%2==0){
    echo $a." is an even number.";
}
else{
    echo $a."is an odd number.";
}
echo "<br>*********************************";


?>
</div>

<h1> PHP by Suman</h1>

</body>
</html>