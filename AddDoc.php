<?php
 include "ConnectToDB.php";
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $spec = $_POST['spec'];
 $date = $_POST['ldate'];
 $lic = $_POST['lice'];
 $hos = $_POST['hos'];
 $test = "select * from doctor where license = '" . $lic . "'";
 $temp = mysqli_query($connection,$test);
 if (mysqli_num_rows($temp)){
   echo "License number already exists, please enter an unused license number.";
 }
 else {
   $query = "INSERT INTO doctor VALUES('" . $lic . "', '" . $fname . "', '" . $lname . "', '" . $spec . "', '" . $date . "', '" . $hos . "')";
   $result = mysqli_query($connection,$query);
   if (!$result) {
     die("databases query failed.");
   }
   else {
     header('Location: DocPort.php'); // Go back to the page.
     exit;
   }
   mysqli_free_result($result);
 }
 exit;
 mysqli_free_result($temp);
?>

