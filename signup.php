<?php
$conn = mysqli_connect("localhost","root","","users");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];



        $sql = "INSERT INTO `user` (`username`, `password`, `date`) VALUES ('$username', '$password', current_timestamp())";
        $res = mysqli_query($conn,$sql);
        if($res)
        {
            echo "success";
        }



}

?>




<!DOCTYPE html>
<html>
<head>
    <title>Signup Page</title>
    <style>
        .Success {
            background-color: #4CAF50; /* Green background color */
            color: #fff; /* White text color */
            padding: 10px; /* Add some padding to the element */
            text-align: center; /* Center-align the text */
        }
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
        input[type="email"],
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
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .login-link {
            margin-top: 15px;
        }

        .login-link a {
            color: #007BFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form action="/tourproject/signup.php" method = "post">
            <input type="text" placeholder="Username" required name="username">
            <input type="password" placeholder="Password" required name = "password">
            <button type="submit">Sign Up</button>
        </form>
        <div class="login-link">
            <p>Already have an account? <a href="login.php">Log in</a></p>
        </div>
    </div>
</body>
</html>
