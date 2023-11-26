<?php

ini_set('display_errors', 0);

$conn = mysqli_connect('mysql','root','root');

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

echo "Connected";

$conn = null;

?>
