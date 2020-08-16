<?php
 $date = $_POST['date'];
 $query = "select dfname, dlname, specialty, date_of_license from doctor where date_of_license < '" . $date . "' order by date_of_license";
 $result = mysqli_query($connection, $query);
 if (!$result){
     die("Error while trying to list the head doctors: ".mysqli_error($connection));
 }

 // Checks to see if any doctors are return from the mysql query.
 if (mysqli_num_rows($result)){
    echo "<ul>"; //Start the bulleted list.
    while ($row = mysqli_fetch_assoc($result)) {
       echo "<li> Name: " . $row["dfname"] . " " . $row["dlname"] . ", Specialty: " . $row["specialty"] . ", License Date: " . $row["date_of_license"];
    }
    echo "</ul>"; //end the bulleted list.
 }
 else { 
    echo "No Doctors were licensed before the entered date.";
 }
  mysqli_free_result($result);
?>

