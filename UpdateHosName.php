<?php
 include "ConnectToDB.php";
 $newname = $_POST["newhosname"];
 $code = $_POST["hoscode"];
 $query = "UPDATE hospital SET hname = '".$newname."' WHERE code = '".$code."'";
 if (!mysqli_query($connection,$query)){
   die("Error while trying to change hospital name: ".mysqli_error($connection));
 } 
 else {
   header('Location: HospitalPort.php'); //Send back to the portal.
   exit;
 } 

?>
