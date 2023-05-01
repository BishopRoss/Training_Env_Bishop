<?php
     $con = mysqli_connect("localhost","root");
     if(!$con)
     {
         die('Could not connect:'.mysqli_error());
     }
     mysqli_select_db($con, "testdb");
     //Move form values to local PHP variables
     $s_Name = $_POST['s_Name'];
     $s_Email = $_POST['s_Email'];
     //Asses $_POST['n_Age'] as a valid integer, or move 0 to $n_Age
     $n_Age = (is_numeric($_POST['n_Age']) ? (int)$_POST['n_Age'] : 0);
     $s_Message = $_POST['s_Message'];
     //insert record using PHP variable vaules
     $sql="INSERT INTO Contact (name, email, age, message) VALUES ('$s_Name', '$s_Email', $n_Age, '$s_Message')";
     if(!mysqli_query($con,$sql))
     {
        die('Error: '. mysqli_error($con));
     }
     echo "1 record added";
     mysqli_close($con);
     ?>

