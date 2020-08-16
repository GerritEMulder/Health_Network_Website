<?php
 $name = $_POST['Name'];
 $order = $_POST['order'];
 $query = "select * from doctor order by " . $name . " " . $order;
 $result = mysqli_query($connection,$query);
 if (!$result) {
   die("databases query failed.");
 }
 while ($row = mysqli_fetch_assoc($result)) {
   echo "<option  value='" . $row["license"] ."'>".$row["dfname"]. " " . $row["dlname"] . "</option>";
 }
 mysqli_free_result($result);
?>
