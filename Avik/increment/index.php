<?php
$insert=false;
if(isset($_POST['name'])){
    $server ="localhost";
    $surname ="root";
    $password ="";

    $con = mysqli_connect($server,$surname,$password);

    if(!$con){
        die("Connection to this database failed due to ".my_sqli_connect_error());
    }
    // echo "Succesfully connect to the database.";
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender =$_POST['gendername'];
    $email= $_POST['email'];
    $phone =$_POST['phone'];
    $desc=$_POST['desc'] ;


    $sql= "INSERT INTO `ex_student2'.'ex_student2` ( `Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', '2024-03-07 20:06:47.000000'); ";
    // echo $sql;
    if($con ->query($sql)== true){
        // echo ("Successfully instered");
        $insert=true;
    }
    else{
        echo ("ERROR $sql <br> $con->error");
        // $not_insert =true;
    }
    $con ->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School_from</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <img class="bg" src="bg.jpg" alt=""> -->
    <div class="container">
        <h1>
            Welcome to Dainhat High School EX students</h1>
            <p>Enter your details</p>
            <?php
            if($insert==true){
            echo "<p class='submitMsg'>Thanks for submitting your form</p>";
            }
            ?>
            <form action="index.php" method="post">
                <input type="text"  name="name" id="name" placeholder="Enter your name">

                <input type="number"  name="age" id="age" placeholder="Enter your age">

                <input type="text"  name="gender" id="gender" placeholder="Enter your Gender">

                <input type="email"  name="email" id="email" placeholder="Enter your Email">

                <input type="phone"  name="phone" id="phone" placeholder="Enter your phone number">

                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter everything which you want say.."></textarea>


                    <button class="btn">Submit</button>
                    <!-- <button class="btn">Reset</button> -->
            </form>
    </div>
    <script src="script.js"></script>
    
</body>
</html>