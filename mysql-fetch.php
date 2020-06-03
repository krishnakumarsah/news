<!DOCTYPE html>
<html>
<head>
	<title>Mysql Fetch</title>
</head>
<body>
<?php
$conn = mysqli_connect("localhost","root","admin","test") or die("Connection Failed :" . mysqli_connect_errno());
$sql = "SELECT * FROMs students";
$result = mysqli_query($conn,$sql);
echo '<pre>';
print_r(mysqli_error_list());
echo '</pre>';
 die();

// $row = mysqli_fetch_field($result);
// echo '<pre>';
// print_r($row);
// echo '</pre>';

// hello test

// foreach ($row as $data) {
// 	echo $data['id'] . " " . $data['first_name'] . " " . $data['last_name'] . "<br>";
// }



while ($row = mysqli_fetch_assoc($result)) {
    echo $row['first_name'] . " ".  $row['last_name'] . "<br>";
}
?>
</body>
</html>