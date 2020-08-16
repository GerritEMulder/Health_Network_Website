<?php
 $ohip = $_POST['OHIP'];
 $query = "SELECT pfname, plname, dfname, dlname FROM patient, doctor, is_assigned WHERE doctor.license = is_assigned.license AND patient.OHIP = is_assigned.OHIP AND patient.OHIP = '" .$ohip ."'";
 $result = mysqli_query($connection, $query);
 if (!$result){
     die("Error while trying to list the head doctors: ".mysqli_error($connection));
 }

 // Checks to see the OHIP number is valid or not.
 if (mysqli_num_rows($result)){
    $row = mysqli_fetch_assoc($result);
    echo "Patients Name: " . $row["pfname"] . " " . $row["plname"] . "<br>";
    echo "Doctor(s) treating the Patient:";
    echo "<ul>"; //Start the bulleted list.
    echo "<li>" . $row["dfname"] . " " . $row["dlname"];
    while ($row = mysqli_fetch_assoc($result)) {
       echo "<li>" . $row["dfname"] . " " . $row["dlname"];
    }
    echo "</ul>"; //end the bulleted list.
 }
 else { // The OHIP number is not valid so print an error.
    echo "OHIP number not valid, please enter a valid OHIP number.";
 }
  mysqli_free_result($result);
?>


