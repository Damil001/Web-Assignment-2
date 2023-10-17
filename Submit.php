<?php

if(isset($_POST["Submit"])){
    $tourName = $_POST["tourName"];
    $tourPrice = $_POST["tourPrice"];
    $tourDesc = $_POST["tourDescription"];
    $contact = $_POST["phoneNumber"];
    $rating = $_POST["rating"];
    $link = mysqli_connect("localhost","root","","tour");
    if($link == false)
    {
        die(mysqli_connect_error());
    }
    $sql = "INSERT INTO tours(Tour_Name, Tour_Price, Tour_Description, Contact, Tour_Rating) VALUES ('$tourName', '$tourPrice','$tourDesc', '$contact', '$rating' )";
    if(mysqli_query($link.$sql) == true)
    {
        echo "Insertion Successful";
    }
    else
    {
        echo "Error Occured";
    }

}

?>