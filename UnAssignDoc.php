<?php
 $OHIP = $_POST['choosepatient'];
 $id = $_POST['removedoctor'];
 $query = "delete from is_assigned where license = '" . $id . "' and OHIP = '" . $OHIP . "'";
 $result = mysqli_query($connection,$query);
 if (!$result) {
   die ("Error while trying to un-assign Doctor from Patient: ". mysqli_error($connection));
 }
?>

