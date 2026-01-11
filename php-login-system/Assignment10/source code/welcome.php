<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'] ?? $_COOKIE['username'] ?? "Guest";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial;
            background: #d4fc79;
            background: linear-gradient(to right, #96e6a1, #d4fc79);
            text-align: center;
            padding-top: 100px;
        }
        a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
<p>You have successfully logged in.</p>
<a href="logout.php">Logout</a>

</body>
</html>
