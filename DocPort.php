<!DOCTYPE html>
<html>
<head>
        <title>Doctor Portal</title>
        <link rel="stylesheet" type="text/css" href="HealthNetwork.css">
</head>

<h1>Welcome to the Doctor Portal</h1>
<body>

<p> 
 <h2 style="font-size:25px;">List all the Doctors who were licensed before a given date.</h2>
 <form action="" method="post">
   Enter the date: 
   <input type="date" name="date" id="date">
   <input type="submit" name="submit" value="Submit">
 </form>
 <?php
   if(isset($_POST['date'])){
      include "ConnectToDB.php";
      include "GetDocLicense.php";
   }
 ?>
</p>

<p>
 <h2 style="font-size:25px;">
   <form action="" method="post">
     List all the Doctors who are not assigned any Patients:
     <input type="submit" name="nopatients" value="Go!">
   </form>
   <?php
     if(isset($_POST['nopatients'])){
        include "ConnectToDB.php";
        include "NoPatients.php";
     }
   ?>
 </h2>
</p>

<p> <! The HTML that deals with showing and sorting the doctors >
 <h2 style="font-size:25px;">List all the Doctors.</h2>
 Sort the list in alphabetical order by:
 <form action="" method="post">
   <input type="radio" name="Name" value="dfname" checked> First Name<br>
   <input type="radio" name="Name" value="dlname"> Last Name<br>
   <input type="radio" name="order" value="ASC" checked> Ascending<br>
   <input type="radio" name="order" value="DESC"> Descending<br>
   <input type="submit" name="doclist" value="Submit">
 </form>
 <form action"" method="post">
   <select name="showdoc" id="showdoc" onchange="this.form.submit()">
     <option value="default">Select Doctor</option>
   <?php
     if(isset($_POST['doclist'])){
        include "ConnectToDB.php";
        include "ListDocs.php";
     }
   ?> 
   </select>
</form>
 <?php
  if(isset($_POST['showdoc'])) {
     include "ConnectToDB.php";
     include "DocInfo.php";
  }
 ?>
</p>

<p> <! The HTML code to add a new Doctor >
 <h2 style="font-size:25px;">Add a new Doctor.</h2>
 <form action="" method="post">
   First Name: 
   <input type="text" name="fname">
   Last Name: 
   <input type="text" name="lname">
   <br> License:
   <input type="text" name="lice" maxlength="4" required>
   Specialty: 
   <input type="text" name="spec">
   Date Licensed: 
   <input type="date" name="ldate"> <br>
   <select name="hos" id="hos" required>
     <option value="">Select Hospital</option>
     <?php
        include "ConnectToDB.php";
        include "HosName.php";
     ?>
   </select>
   <input type="submit" name="adddoc" value="Submit">
 </form>
 <?php
  if(isset($_POST['adddoc'])) {
     include "ConnectToDB.php";
     include "AddDoc.php";
  }
 ?>
</p>

<p> <! The HTML code to delete a Doctor >
 <h2 style="font-size:25px;">Remove a Doctor.</h2>
 <form action="" method="post">
  <select name="docs" id="docs">
    <option value="">Select Doctor</option>
    <?php
      include "ConnectToDB.php";
      include "AllDocs.php";
    ?>
  </select>
  <input type="submit" value="Submit" name="remdoc" onclick="clicked(event)">
 </form>
 <?php
  if(isset($_POST['remdoc'])) {
      include "ConnectToDB.php";
      include "RemoveDoc.php";
  }
 ?>
</p>
<script>
function clicked(e)
{
    if(!confirm('You are about to delete a Doctor that coulld have Patients, Continue?'))e.preventDefault();
}
</script>
</body>
</html>
