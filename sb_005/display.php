<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Hello World";
    date_default_timezone_set("Asia/Kolkata");
    $currentehour=date("H");
    $currenttime=date("H:i:s");
    echo "<br>";
    echo $currenttime;
    echo "<br>";
    echo $currentehour;
    ?>
</body>
</html>