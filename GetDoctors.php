<?php
 $ohip = $_POST['choosepatient'];
 $query = "select distinct doctor.license, dfname, dlname from doctor, is_assigned  where is_assigned.license = doctor.license and doctor.license NOT IN (select doctor.license from doctor, is_assigned WHERE is_assigned.license = doctor.license and OHIP = '" . $ohip . "') order by dlname";
 $result = mysqli_query($connection,$query);
 if (!$result) {
   die("databases query failed.");
 }
 while ($row = mysqli_fetch_assoc($result)) {
   echo "<option value='" . $row["license"] . "'>" . $row["dfname"] . " " . $row["dlname"] . "</option>";
 }
 mysqli_free_result($result);
?>

