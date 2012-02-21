<?php
$server = "";
$username = "";
$password = "";
$database = "";

$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());

mysql_select_db($database, $con);

$locationID = $_POST["lid"];
$email = mysql_real_escape_string($_POST["email"]);
$comment = mysql_real_escape_string($_POST["comment"]);

$sql = "INSERT INTO comments (location_id, email, comment) ";
$sql .= "VALUES ($locationID, '$email', '$comment')";

if (!mysql_query($sql, $con)) {
	die('Error: ' . mysql_error());
} else {
	echo "Comment added";
}

mysql_close($con);
?>