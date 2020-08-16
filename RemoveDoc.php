<?php
  $id = $_POST['docs'];
  $query = "delete from doctor where license = '" . $id . "'";
  $result = mysqli_query($connection,$query);
  if (!$result) {
    die ("Failed to remove Doctor: ". mysqli_error($connection));
  }
?>
