<?php
 $query = "select * from patient order by plname";
 $result = mysqli_query($connection,$query);
 if (!$result) {
   die("databases query failed.");
 }
 while ($row = mysqli_fetch_assoc($result)) {
   echo "<option  value='" . $row["OHIP"] ."'>".$row["pfname"]. " " . $row["plname"] . "</option>";
 }
 mysqli_free_result($result);
?>
