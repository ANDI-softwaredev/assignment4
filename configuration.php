<?php
$servername ="sql8.freemysqlhosting.net";
$username ="sql8537860";
$password ="pjmbd5dlyx";
$dbname ="sql8537860";
$portno = 3306;

//create connection
$conn = new mysqli($servername, $username, $password, $dbname, $portno);

//connection check
if ($conn->connect_error) {
	die("Connection failed". $conn->connect_error);
}