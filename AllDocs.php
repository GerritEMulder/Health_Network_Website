<?php
 $query= "select * from doctor";
 $result = mysqli_query($connection, $query);
 if (!$result){
     die("Error while trying to list all the doctors: ".mysqli_error($connection));
 }
 while ($row = mysqli_fetch_assoc($result)) {
   echo "<option  value='" . $row["license"] ."'>".$row["dfname"]. " " . $row["dlname"] . "</option>";
 }
 mysqli_free_result($result);
?>

