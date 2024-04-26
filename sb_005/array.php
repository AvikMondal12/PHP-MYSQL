<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>

    </style>
</head>
<body>
    <?php
    echo "<h1>The array is </h1>";
    
    $arr=array("Suman ","Manish ","Kuntal ","Avik ","Kuntal ");
    // foreach($arr as $key => $value ){
    //     echo $value;
    // }
    $size=count($arr);
    for($i=0;$i<$size;$i++){
        echo $arr[$i];
    }
    echo "<br>";
    echo "<br>";
    echo ("<h1>The sorted array is :</h1>");
    sort($arr);
    foreach($arr as $value){
        echo $value;
    }
    echo "<br>";
    echo "<br>";
    echo ("<h1>Sort array</h1>");
    print_r (array_unique($arr));

    echo "<h1>Reverse array</h1>";
    for($i=$size-1;$i>0;$i--){
        echo $arr[$i];
    }

    echo "<h1>Reverse array using keyword</h1>";
    print_r(array_reverse($arr));
    ?>
    
</body>
</html>