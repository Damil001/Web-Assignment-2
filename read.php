<?php

$link = mysqli_connect("localhost", "root", "", "tour");

if(isset($_GET['id'])){ 
    $ID = $_GET['id']; 
    $delete = mysqli_query($link, "DELETE FROM tours WHERE ID = '$ID'");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <title>List of Tours</title>
    <style>
        body{
            font-family: 'Manrope', sans-serif;
            font-family: 'Rubik', sans-serif;
            transition: all 0.5s ease-out;
        }
        .tour-entry {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px;
            margin: 10px;
            max-width: 400px;
        
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
        .buttonwrapper{
            display: flex;
            align-items:center;
            justify-content: start;
            gap:20px;
            margin-top:20px

        }
        .deleteButton{
            padding:10px;
            border: 1px solid red;
            color: black;
            text-decoration: none;
            border-radius: 4px;
        }

        .deleteButton:hover{
            background-color: red;
            color:white;
            transition: all 0.5s ease-out;
        }
        .updateButton{
            padding:10px;
            border: 1px solid blue;
            color: black;
            text-decoration: none;
            border-radius: 4px;
        }

        .updateButton:hover{
            background-color: blue;
            color:white;
            transition: all 0.5s ease-out;
        }
        .cardwrapper{
            display: flex;
            align-items:center;
            justify-content: start;
            gap:20px;
            margin-top:20px;
            flex-wrap: wrap;
        }
        .mainButton{
            padding:10px;
            border: 1px solid blue;
            color: black;
            text-decoration: none;
            border-radius: 4px;
        }
        .mainButton:Hover{
            background-color: blue;
            color:white;
            transition: all 0.5s ease-out;
        }
    </style>
</head>
<body>
    <h1>List of Food</h1>

    <div class = "cardwrapper">

    <?php
    $link = mysqli_connect("localhost", "root", "", "tour");
    if ($link == false) {
        die(mysqli_connect_error());
    }

    $sql = "SELECT * FROM tours";
    $result = mysqli_query($link, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='tour-entry'>";
                echo "<strong>Food Name:</strong> " . $row['Tour_Name'] . "<br>";
                echo "<strong>Food Price:</strong> $" . $row['Tour_Price'] . "<br>";
                echo "<strong>Food Description:</strong> " . $row['Tour_Description'] . "<br>";
                echo "<strong>Contact:</strong> " . $row['Contact'] . "<br>";
                echo "<strong>Rating:</strong> " . $row['Tour_Rating'] . "<br>";
                echo "<div class='buttonwrapper'>";
               
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "No tours found.";
        }

        mysqli_free_result($result);
    } else {
        echo "Error: " . mysqli_error($link);
    }
    mysqli_close($link);
    ?>
</div>
</body>
</html>
