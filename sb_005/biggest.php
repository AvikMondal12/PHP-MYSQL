<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
   <div class="phpcont">
    <h1>
        welcom to my php page
    </h1>
    <?php
    $num1=$_POST['number1'];
    $num2=$_POST['number2'];
    $num3=$_POST['number3'];
    echo "The frist number is:".$num1;
    echo"<br>";
    echo "The second number is:".$num2;
    echo"<br>";
    echo "The third number is:".$num3;
    echo"<br>";
    if($num1>$num2 and $num1>$num2){
        echo 'Number 1 is the biggest number.';
    }
    elseif($num2>$num3){
        echo 'Number 2 is biggest number.';
    }
    else{
        echo 'Number 3 is the biggest number';
    }
    $num4=$_POST['number4'];
    $num5=$_POST['number5'];
    // $num6=$num4;
    // $num4=$num5;
    // $num5=$num6;
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo "The frist number is:".$num4;
    echo"<br>";
    echo "The second number is:".$num5;


// swaping using +,-
$num4=$num4-$num5;
$num5=$num4+$num5;
$num4=$num5-$num4;
echo"<br>";
echo "After swaping";
echo"<br>";
    echo "This is the frist number:".$num4;
    echo"<br>";
    echo "This is the second number:".$num5;

    echo "<br>";

    $num7=$_POST['number6'];
    $num8=$_POST['number7'];
    $temp=1;
    for($i=1;$i<=$num8;$i++){
        $temp=$num7*$i;

        echo $num7." * ".$i ." = ".$temp;
        echo "<br>";
    }
    ?>
</div>
    
</body>
</html>