<!DOCTYPE html>
<html>
<head>
	<title>Mysql Fetch Row</title>
</head>
<body>
<?php
$conn = mysqli_connect("localhost","root","admin","test") or die("Connection Failed.");
$sql = "SELECT * FROM students WHERE last_name = 'Yadav'";
$result = mysqli_query($conn,$sql) or die("Query Failed.");
echo "Total Rows : " . mysqli_affected_rows($conn);

?>
</body>
</html>