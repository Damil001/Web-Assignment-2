<?php
$link = mysqli_connect("localhost", "root", "", "tour");
$id = $_GET['id'];

$update = mysqli_query($link, "SELECT * FROM tours WHERE ID = '$id'");
$data = mysqli_fetch_array($update);

if(isset($_POST["Submit"])) {
    $tourName = $_POST["tourName"];
    $tourPrice = $_POST["tourPrice"];
    $tourDesc = $_POST["tourDescription"];
    $contact = $_POST["phoneNumber"];
    $rating = $_POST["rating"];

    $sql = "UPDATE tours SET Tour_Name = '$tourName', Tour_Price = '$tourPrice', Tour_Description = '$tourDesc', Contact = '$contact', Tour_Rating = '$rating' WHERE ID = '$id'";

    // Create a new connection for the update query
    $conn = mysqli_connect("localhost", "root", "", "tour");

    $result = mysqli_query($conn, $sql);
    if($result == TRUE) {
        echo "Record Updated";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>





    <form action="" method="post">
        <label for="tourName">Tour Name:</label>
        <input type="text" id="tourName" name="tourName" value = "<?php echo $data['Tour_Name']?>" required><br><br>

        <label for="tourPrice">Tour Price:</label>
        <input type="number" id="tourPrice" name="tourPrice" value = "<?php echo $data['Tour_Price']?>" required><br><br>

        <label for="tourDescription">Tour Description:</label><br>
        <textarea id="tourDescription" name="tourDescription" rows="4" cols="50"required><?php echo $data['Tour_Description']?></textarea><br><br>

        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" id="phoneNumber" name="phoneNumber"  placeholder="1234567890" value = "<?php echo $data['Contact']?>" required><br><br>

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

        <input type="submit" value="Update" name="">
    </form>
    
</body>
</html>