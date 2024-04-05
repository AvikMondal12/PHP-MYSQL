<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <style>
    body{
        display: flex;
        background-color: aqua;
        border: 2px solid black;
        width: 350px;
        margin: 30px auto ;
        padding: 15px;
        border-radius: 10px;
        text-align: center;
        font-size: 20px;
    }
    
  </style>
    
</head>

<body>
   <div>
    <?php
    
    $num=$_POST['number'];
    if ($num<=50){
        echo "Total ammount of unit ".$num;
        echo " is Rs ".$num*3.50;
    }
    else if ($num>50 and $num<=100){
        echo "Total ammount of unit ".$num;
        echo " is Rs ".$num*4;
    }
    else if ($num>100 and $num<=200){
        echo "Total ammount of unit ".$num;
        echo " is Rs ".$num*4.20;
    }
    else if ($num>250){
        echo "Total ammount of unit ".$num;
        echo " is Rs ". $num*6.50;
    }
    
    ?>
</div>
</body>
</html>