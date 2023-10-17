



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Manrope', sans-serif;
            font-family: 'Rubik', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            height: 100vh;
            padding:20px;
        }

        .formWrapper{
            display: flex;
            align-items:center;
            justify-content:center;
            padding-top: 50px;
            
            width:100%;
        }
        form {
            max-width: 500px;
           
            background-color: #fff;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        textarea,
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .Succeess{
            background-color:#0056b3;
            color:white;
            transition: all 0.5s ease-out;
            padding:10px;
            
        }
        .Error{
            background-color: red;
            color:white;
            transition: all 0.5s ease-out;
            padding:10px;
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
    <a href="read.php" class= "mainButton">View All Tours</a>
    <div class="formWrapper">
    


    <form action="" method="post">
        <label for="tourName">Tour Name:</label>
        <input type="text" id="tourName" name="tourName" required><br><br>

        <label for="tourPrice">Tour Price:</label>
        <input type="number" id="tourPrice" name="tourPrice" required><br><br>

        <label for="tourDescription">Tour Description:</label><br>
        <textarea id="tourDescription" name="tourDescription" rows="4" cols="50" required></textarea><br><br>

        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" id="phoneNumber" name="phoneNumber"  placeholder="1234567890" required><br><br>

        <label for="rating">Rating:</label><br>
        <input type="radio" id="rating1" name="rating" value="1">
        <label for="rating1">1</label>
        <input type="radio" id="rating2" name="rating" value="2">
        <label for="rating2">2</label>
        <input type="radio" id="rating3" name="rating" value="3">
        <label for="rating3">3</label>
        <input type="radio" id="rating4" name="rating" value="4">
        <label for="rating4">4</label>
        <input type="radio" id="rating5" name="rating" value="5">
        <label for="rating5">5</label><br><br>

        <input type="submit" value="Submit" name="Submit">
    </form>

    </div>


    <?php



if(isset($_POST["Submit"])){
  

    $tourName = $_POST["tourName"];
    $tourPrice = $_POST["tourPrice"];
    $tourDesc = $_POST["tourDescription"];
    $contact = $_POST["phoneNumber"];
    $rating = $_POST["rating"];

    $link = mysqli_connect("localhost", "root", "", "tour");
    $sql = "INSERT INTO tours(Tour_Name, Tour_Price, Tour_Description, Contact, Tour_Rating) VALUES ('$tourName', '$tourPrice','$tourDesc', '$contact', '$rating' )";
    $result = mysqli_query($link,$sql);
    if($result == true)
    {
        echo "<div class ='Succeess' >Insertion Completed</div>";
    }
    else
    {
        echo "<div class = 'Error'>Error </div>";
    }
}



?>
    
</body>
</html>

