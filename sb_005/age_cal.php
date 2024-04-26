<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$bday = new DateTime('14.01.2003'); // Creating a DateTime object representing your date of birth.
$today = new Datetime(date('m.d.y')); // Creating a DateTime object representing today's date.
$diff = $today->diff($bday); // Calculating the difference between your date of birth and today's date.
printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d); // Displaying your age in years, months, and days.
printf("\n"); // Adding a new line for formatting.
?>
    
</body>
</html>