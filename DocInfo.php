<?php
 $id = $_POST['showdoc'];
 $query = "select dfname, dlname, license, specialty, date_of_license, hname from doctor, hospital where license = '". $id ."' and code = works_at";
 $result = mysqli_query($connection,$query);
 if (!$result) {
   die("databases query failed.");
 }
 $row = mysqli_fetch_assoc($result);
 echo "<ul>"; //Start the bulleted list.
 echo "<li>" ."Name: " .$row["dfname"] . " " . $row["dlname"] . ", Specialty: " . $row["specialty"] . ", Works at: " . $row["hname"] . ", License: " . $row["license"] . ", Date License was recieved: " . $row["date_of_license"];
 echo "</ul>"; //end the bulleted list.
 mysqli_free_result($result);
?>

