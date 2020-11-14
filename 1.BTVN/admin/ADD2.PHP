<?php
            
            require("config.php");

            if(isset($_POST['luu']))
            {
             $id=$_POST['mamon'];
             $ten=$_POST['tenmon'];
          $des=$_POST['description'];            
          $sql="INSERT INTO subject (ID,name,description) VALUES ( '$id', '$ten','$des')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
             } else {
                echo "Error: " . $sql . "
        " . mysqli_error($conn);
             }
            }
             mysqli_close($conn);
             ?>  