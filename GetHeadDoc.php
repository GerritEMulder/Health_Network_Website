<?php
 $query = "SELECT hname, dfname, dlname FROM hospital, doctor WHERE license = head_doc ORDER BY hname";
 $result = mysqli_query($connection, $query);
 if (!$result){
     die("Error while trying to list the head doctors: ".mysqli_error($connection));
 }
 echo "<ul>"; //Start the bulleted list.
 while ($row = mysqli_fetch_assoc($result)) {
     echo "<li>" ."Hospital Name: " .$row["hname"] . ", Name of Head Doctor: " . $row["dfname"] . " " . $row["dlname"];
 }
 echo "</ul>"; //end the bulleted list.
 mysqli_free_result($result);
?>
