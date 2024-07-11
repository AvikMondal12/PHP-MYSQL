<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Division Table</title>
</head>
<body>

<H2>The division table :</H2>
<TABLE BORDER=10>
<?php
    #starting number
    $start_num = 1;
    #ending number
    $end_num = 10;

    print("<TR>");
    #print the first row
    print("<TH> </TH>");
  for ($count_1 = $start_num;$count_1 <= $end_num;$count_1++)
    print("<TH>$count_1</TH>");
  print("</TR>");

  #print the rest of the rows
  for ($count_1 = $start_num;$count_1 <= $end_num;$count_1++){
    print("<TR><TH>$count_1</TH>");
    #Calculating the divisible
    for ($count_2 = $start_num;$count_2 <= $end_num;$count_2++){
        $result = $count_1 / $count_2;
        #display the divisible ans
        printf("<TD>%.2f</TD>",
               $result);  // see Chapter 108
      }
    print("</TR>\n");
  }

?> 
</body>
</html>