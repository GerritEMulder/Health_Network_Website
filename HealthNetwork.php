<!DOCTYPE html>
<html>
<head>
	<title>Health Network</title>
	<link rel="stylesheet" type="text/css" href="HealthNetwork.css">

<! The Styles for the buttons. >
<style>
.doc {
  background-color: Blue;
  border: none;
  color: white;
  padding: 15px 25px;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  border-radius: 6px;
}
.doc:hover {
  background-color: MediumBlue;
}

.patient {
  background-color: BlueViolet;
  border: none;
  color: white;
  padding: 15px 25px;
  text-align: center;
  font-size: 16px;
  border-radius: 6px;
  cursor: pointer;
}
.patient:hover {
  background-color: MediumPurple;
}

.hospital {
  background-color: LightSlateGray;
  border: none;
  color: white;
  padding: 15px 25px;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  border-radius: 6px;
}
.hospital:hover {
  background-color: SlateGray;
}
</style>
</head>

<h1>Canada Health Network Homepage</h1>

<body>

Click on where you would like to go:
<button class="doc" onclick="window.location.href = 'DocPort.php';">Doctor Portal</button>
<button class="patient" onclick="window.location.href = 'PatientPort.php';">Patient Portal</button>
<button class="hospital" onclick="window.location.href = 'HospitalPort.php';">Hospital Portal</button>

</body>
