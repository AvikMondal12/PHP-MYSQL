<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<style>
    body{
        background-color: aquamarine;
    }
    h3{
        display: flex;
        justify-content: center;
    }
    div{
        display: flex;
        justify-content: center;
        font-family: Arial, Helvetica, sans-serif;
        border: 1px solid black;
        background-color: lightcoral;
        border-radius: 5px;
    }
</style>
<body>
    <h3>
        Welcome to my page
    </h3>
    <div>
    <?php
    $num1=$_POST['number1'];
    $num2=$_POST['number2'];
    $operator=$_POST['operator'];
    switch ($operator) {
        case 'addition':
            $result=$num1+$num2;
            echo "The sum of this two number is :".$result;
            break;

            case 'substraction':
                $result=$num1-$num2;
                echo "Substract of this two number is :".$result;
                break;
                case 'multiplication':
                    $result=$num1*$num2;
                    echo "Multiplication of this two number is :".$result;
                    break;
               
        
                    case 'division':
                        $result=$num1/$num2;
                        echo "The Division of this two number is :".$result;
                        break;
    }
    ?>
</div>
</body>
</html>