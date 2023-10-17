<?php

$conn = new mysqli("localhost", "root","","tour");
if($conn->connect_error){
    die("Connection Failed" . $conn->connect_error);
}
?>