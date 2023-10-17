<?php
$login = false;
$conn = mysqli_connect("localhost", "root", "", "users");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $res = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($res);

    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect to read.php
        header("Location: read.php");
        exit(); // Terminate the script to ensure the redirection takes place
    }
}


?>


<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            width: 300px;
            padding: 20px;
            text-align: center;
        }

        h2 {
            margin: 0 0 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .signup-link {
            margin-top: 15px;
        }

        .signup-link a {
            color: #007BFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="/tourproject/login.php" method = "post">
            <input type="text" placeholder="Username or Email" required name = "username">
            <input type="password" placeholder="Password" required name = "password">
            <button type="submit">Log In</button>
        </form>
        <div class="signup-link">
            <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </div>
    </div>
</body>
</html>
