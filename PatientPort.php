<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
        <title>Patient Portal</title>
        <link rel="stylesheet" type="text/css" href="HealthNetwork.css">
</head>

<h1>Welcome to the Patient Portal</h1>
<body>
<p>
 <h2 style="font-size:25px;">Show Patient and their Doctor(s).</h2>
 <form action="" method="post">
   Enter the OHIP number of the Patient:
   <input type="text" name="OHIP" id="OHIP" maxlength="9"> 
   <input type="submit" name="submit" value="Submit">
 </form>
<?php
  if(isset($_POST['OHIP'])){
     include "ConnectToDB.php";
     include "GetPatientsDoc.php";
  }
?>
</p>

<! The HTML code to Assign or Remove Doctor from Patient. >
<p>
 <h2 style="font-size:25px;">Assign or Remove Doctor from Patient.</h2>
 Select Patient (Ordered by last name):
 <form action="" method="post">
   <select name="choosepatient" id="choosepatient" onchange="this.form.submit()">
     <option value="default">Select Here</option>
   <?php
    include "ConnectToDB.php";
    include "GetPatients.php";
   ?>
   </select>
 </form>
 Select Doctor to Assign:
 <form action="" method="post">
   <select name="choosedoctor" id="choosedoctor" required>
     <option value="">Select Here</option>
   <?php
    if (isset($_POST['choosepatient'])) {
      $_SESSION["ohip"] = $_POST['choosepatient'];
      $_SESSION["hip"] = $_POST['choosepatient'];
      include "ConnectToDB.php";
      include "GetDoctors.php";
    }
   ?>
   </select>
   <input type="submit" name="assign" value="submit">
 </form>
 <?php
  if(isset($_POST['assign'])){
     $_POST['choosepatient'] = $_SESSION["ohip"];
     include "ConnectToDB.php";
     include "AssignDoc.php";
  }
 ?>
 Select Doctor to stop treatment of Patient:
 <form action="" method="post">
   <select name="removedoctor" id="removedoctor" required>
     <option value="">Select Here</option>
   <?php
    if (isset($_POST['choosepatient'])) {
      include "ConnectToDB.php";
      include "StopTreatment.php";
    }
   ?>
   </select>
   <input type="submit" name="remove" value="submit">
 </form>
 <?php
  if(isset($_POST['remove'])){
     $_POST['choosepatient'] = $_SESSION["hip"];
     include "ConnectToDB.php";
     include "UnAssignDoc.php";
  }
 ?>
</p>
</body>
</html>

