<?php
 $query = "select hname, hcity, hprovince, code from hospital";
 $result = mysqli_query($connection,$query);
 if (!$result) {
   die("databases query failed.");
 }
 while ($row = mysqli_fetch_assoc($result)) {
   echo "<option  value='" . $row["code"] ."'>".$row["hname"]. ", " . $row["hcity"] . ", " . $row["hprovince"]. "</option>";
 }
 mysqli_free_result($result);
?>

