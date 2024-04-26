<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factoeial</title>
    <style>
        body{
            background-color: lightsalmon;
        }
        .container{
            display: flex;
            justify-content: center;
            margin: 15px 0px;
            
        }
    </style>
</head>
<body>
        <form action="fact.php" method="post">
            <div class="container">
        <input type="number"name="number"placeholder ="Enter the number">
        <button type="submit">Submit</button> </form>
        </div>
        <div class="container">
    <?php
        $multi=1;
        $num=$_POST['number'];
        for ($i=1;$i<=$num;$i++){
            $multi=$multi*$i;
        }
        echo("The value of this number is :".$multi)
    ?>
        </div>
   
</body>
</html>