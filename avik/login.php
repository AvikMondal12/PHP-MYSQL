<?php
session_start();

/* CONNECT MYSQL */
$conn = new mysqli("localhost", "root", "");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/* SELECT DATABASE */
$conn->select_db("USER");

/* LOGIN */
if (isset($_POST['login'])) {
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE user_id=? AND active=1");
    $stmt->bind_param("s", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $user_id;
        } else {
            $error = "Invalid Username or Password";
        }
    } else {
        $error = "Invalid Username or Password";
    }
}

/* LOGOUT */
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial; background: linear-gradient(120deg,#4facfe,#00f2fe); height: 100vh; margin: 0; }
        .box { width: 350px; background: white; padding: 30px; position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); border-radius: 10px; }
        input, button { width: 100%; padding: 10px; margin: 10px 0; }
        button { background: #007bff; color: white; border: none; cursor: pointer; }
        .error { text-align: center; color: red; }
    </style>
</head>
<body>
<div class="box">
    <?php if (isset($_SESSION['user_id'])) { ?>
        <h2>Welcome <?php echo htmlspecialchars($_SESSION['user_id']); ?></h2>
        <p style="text-align:center;">
            <a href="?logout=true">Logout</a>
        </p>
    <?php } else { ?>
        <h2>Login</h2>
        <?php if (isset($error)) { ?><p class="error"><?php echo $error; ?></p><?php } ?>
        <form method="POST">
            <input type="text" name="user_id" placeholder="User ID" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <br>
        <a href="register.php">Create Account</a>
    <?php } ?>
</div>
</body>
</html>
