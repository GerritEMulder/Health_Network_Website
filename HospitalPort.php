<!DOCTYPE html>
<html>
<head>
        <title>Hospital Portal</title>
        <link rel="stylesheet" type="text/css" href="HealthNetwork.css">
</head>

<h1>Welcome to the Hospital Portal</h1>

<body>

<?php
 include "ConnectToDB.php";
?>

<! The Form for submitting a hospital name change. >
<p>
 <h2 style="font-size:25px;">Change the name of a Hospital</h2>
 <form action="UpdateHosName.php" method="post"> 
    Enter the Hospital code of the Hospital whose name you want to change: 
    <input type="text" name="hoscode" maxlength="3"> <br>
    Enter the name you want to change to: 
    <input type="text" name="newhosname" maxlength="20"> <br>
    <input type="submit" value="Submit">
 </form> 
</p>
<br>
<p>
 <h2 style="font-size:25px;">List the head doctor of each Hospital: 
 <form action="" method="post">
   <input type="submit" name="runlist" id="runlist" value="Click Here"> 
 </form> </h2>
<?php
  if(isset($_POST['runlist'])){
     include "ConnectToDB.php";
     include "GetHeadDoc.php";
  }
?>
</p>
</body>
</html>
