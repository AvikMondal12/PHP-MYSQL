<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin:0%;
        padding: 0%;
        box-sizing: border-box;
    }

    .avik{
        max-width: 80%;
        background-color: rgb(158, 203, 242);
        /* padding: 25px; */
        margin: auto;
        padding: 25px;
        
    }
</style>
<body>
    <div class="avik">
    <h1>Welcome in php</h1>
    
    <?php
    $age = 20;
    if($age>18){
        echo"You are an adult.";
    }
    else{
        echo("You are not an adult.");
    }
    ?>
    </div>
    
</body>
</html>