<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num=$_POST['number'];
    $sum=0;
    for($i=0;$i<strlen($num);$i++){
        $sum=$sum+$num[$i];
        
    }
    echo $sum;
    ?>
</body>
</html>