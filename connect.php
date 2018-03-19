<!DOCTYPE html>
<html>
<head>
	<title>Database Practice</title>
</head>
<body>
<?php
$servername="localhost";
$username = "root";
$password = "";

//creating connection
$conn = new mysqli($servername, $username, $password);
//check connection
if($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected succesfully";
$conn -> close();
?>
</body>
</html>