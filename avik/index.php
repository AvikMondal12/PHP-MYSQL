<?php /* CONNECT MYSQL */ $conn = new mysqli("localhost", "root", ""); /* CREATE DATABASE */
$conn->query("CREATE DATABASE IF NOT EXISTS USER"); /* SELECT DATABASE */
$conn->select_db("USER"); /* CREATE TABLE */
$conn->query("CREATE TABLE IF NOT EXISTS users( user_id VARCHAR(50) PRIMARY KEY, password VARCHAR(100), active TINYINT(1) DEFAULT 1 )"); /* REGISTER USER */
if (isset($_POST['register'])) {
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users(user_id,password,active) VALUES('$user_id','$password',1)";
    if ($conn->query($sql)) {
        $msg = "Registration Successful!";
    } else {
        $msg = "User already exists!";
    }
} ?>
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(120deg, #4facfe, #00f2fe);
            height: 100vh;
            margin: 0;
        }

        .box {
            width: 350px;
            background: white;
            padding: 30px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
        }

        .msg {
            text-align: center;
            color: green;
        }
    </style>
</head>

<body>
    <div class="box">
        <h2>Register</h2> <?php if (isset($msg)) { ?> <p class="msg"><?php echo $msg; ?></p> <?php } ?> <form method="POST"> <input type="text" name="user_id" placeholder="Enter User ID" required> <input type="password" name="password" placeholder="Enter Password" required> <button type="submit" name="register">Register</button> </form> <br> <a href="login.php">Go to Login</a>
    </div>
</body>

</html> <?php session_start(); /* CONNECT MYSQL */
        $conn = new mysqli("localhost", "root", ""); /* SELECT DATABASE */
        $conn->select_db("USER"); /* LOGIN */
        if (isset($_POST['login'])) {
            $user_id = $_POST['user_id'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM users WHERE user_id='$user_id' AND password='$password' AND active=1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $_SESSION['user_id'] = $user_id;
            } else {
                $error = "Invalid Username or Password";
            }
        } /* LOGOUT */
        if (isset($_GET['logout'])) {
            session_destroy();
            header("Location:login.php");
        } ?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(120deg, #4facfe, #00f2fe);
            height: 100vh;
            margin: 0;
        }

        .box {
            width: 350px;
            background: white;
            padding: 30px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
        }

        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="box"> <?php if (isset($_SESSION['user_id'])) { ?> <h2>Welcome <?php echo $_SESSION['user_id']; ?></h2>
            <p style="text-align:center;"> <a href="?logout=true">Logout</a> </p> <?php } else { ?> <h2>Login</h2> <?php if (isset($error)) { ?> <p class="error"><?php echo $error; ?></p> <?php } ?> <form method="POST"> <input type="text" name="user_id" placeholder="User ID" required> <input type="password" name="password" placeholder="Password" required> <button type="submit" name="login">Login</button> </form> <br> <a href="register.php">Create Account</a> <?php } ?>
    </div>
</body>

</html>