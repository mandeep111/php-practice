<!DOCTYPE html>
<html>
<head>
	<title>Inserting data</title>
</head>
<body>
<?php
require 'connection.php';

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mandeep', 'Dhakal', 'mandeepdhakl11@gmail.com')";

if ($conn -> query($sql)===TRUE) {
	echo "New record created successfully";
}
else {
	echo "Error: " .$sql . "<br>" .$conn->error;
}
$conn -> close();
?>
</body>
</html>