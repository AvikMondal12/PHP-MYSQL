<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .avik{
            display: flex;
            justify-content: center;
            background-color:rgb(235, 243, 83) ;
            color: black;
            font-style: italic;

        }
    </style>
</head>

<body class="avik">
    <h2>
        <div >
    <?php
    echo "<pre>";
    
    echo "Mr.$_POST[myname]";
    echo " $_POST[lname]";
    echo "<br>";
    echo $_POST['mynumber'];
    echo "<br>";
    echo "<br>";
    echo("******************Odd_Even check..*****************");
    echo "<br>";
    $num=$_POST['even_odd'];
    if($num%2==0){
        echo("This is an even number.");
    }
    else{
        echo("This is an odd number.");
    }
    echo "<br>";
    echo "<br>";
    echo("************************Gretter number check..************************");
    echo "<br>";
    $num1=$_POST['number1'];
    $num2=$_POST['number2'];
    $num3=$_POST['number3'];
    if($num1>$num2 and $num1>$num3){
        echo ("Number one is greatter.");
    }
    else if($num2>$num3){
        echo("Number two is greatter");
    }
    else{
        echo("Number three is greatter.");
    }
    echo "</pre>";
    ?>
    
    
</div>
    
</h2>
</body>
</html>