<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="php">
       <?php
        echo "<pre>";
        echo "<h1>Wlcome</h1>";
        echo "<h2>Mr. $_POST[f_name] </h2> ";
        echo "<h2> $_POST[s_name]</h2>";
        echo "<h2>$_POST[p_number]</h2>";
        echo "</pre>"; 
       ?>
    </div>
</body>
</html>
