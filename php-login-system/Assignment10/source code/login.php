<?php
session_start();

$valid_username = "admin";
$valid_password = "12345";

$message = "";

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;

        
        setcookie("username", $username, time() + 3600, "/");

        header("Location: welcome.php");
        exit();
    } else {
        $message = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial;
            background: #eef2f3;
        }
        .login-box {
            width: 300px;
            margin: 100px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }
        input[type=submit] {
            width: 100%;
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 8px;
            border-radius: 5px;
        }
        .error { color: red; }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login</h2>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Enter Username" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <input type="submit" value="Login">
    </form>
    <p class="error"><?php echo $message; ?></p>
</div>

</body>
</html>
