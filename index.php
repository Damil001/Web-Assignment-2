

    <?php
    // PHP code can be inserted here
    if (isset($_POST['tourName'])) {
        $tourName = $_POST['tourName'];
        $tourPrice = $_POST['tourPrice'];
        $tourDescription = $_POST['tourDescription'];
        $contact = $_POST['phoneNumber'];
        $rating = $_POST['rating'];

      $link = mysqli_connect("localhost","root","","tour");
      if($link == false)
      {
        die(mysqli_connect_error());
      }
      $sql = "INSERT INTO tours (Tour_Name, Tour_Price, Tour_Description, Contact, Tour_Rating) VALUES ('$tourName', '$tourPrice', '$tourDescription', '$contact', '$rating')";
      if(mysqli_query($link,$sql)){
        echo "Insertion Successful";
      }
      else
      {
        echo "Error";
      }
    }

        if(isset($_POST["show"]))
        {
            
        }
    ?>

    

