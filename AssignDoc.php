<?php
 $OHIP = $_POST['choosepatient'];
 $id = $_POST['choosedoctor'];
 $query = "insert into is_assigned values('" . $id . "', '" . $OHIP . "')";
 $result = mysqli_query($connection,$query);
 if (!$result) {
   die ("Error while trying to assign Doctor to Patient: ". mysqli_error($connection));
 }
?>
