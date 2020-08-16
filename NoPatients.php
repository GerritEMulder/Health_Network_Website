<?php
 $query = "SELECT dfname, dlname FROM doctor WHERE license NOT IN (SELECT license FROM is_assigned) ORDER BY dlname";
 $result = mysqli_query($connection, $query);
 if (!$result){
     die("Error while trying to list the doctors: ".mysqli_error($connection));
 }
 echo "<ul>"; //Start the bulleted list.
 while ($row = mysqli_fetch_assoc($result)) {
     echo "<li>" ."Doctor Name: " . $row["dfname"] . " " . $row["dlname"];
 }
 echo "</ul>"; //end the bulleted list.
 mysqli_free_result($result);
?>

