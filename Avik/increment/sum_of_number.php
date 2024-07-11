<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: lightseagreen;
            


        }
        div{
            display: flex;
            justify-content: center;
            width: 300px;
            margin:200px auto;
            padding: 20px;
            border: 2px solid black;
            border-radius: 10px;
            
        }
    </style>
</head>
<body>
    <div>
    <?php
    $num=$_POST['number'];
    $sum=0;
    for($i=0;$i<strlen($num);$i++){
        $sum=$sum+$num[$i];
    }
    echo "The sum of the indivutal number is :".$sum;
    ?>
</div>
</body>
</html>