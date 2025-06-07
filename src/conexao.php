<?php

$host = "localhost";
$user = "netshoes";
$pass = "";
$bd   = "netshoes";

$mysqli = new mysqli($host, $user, $pass, $bd);

if ($mysqli -> connect_errno) {
	echo "connect failed: " . $mysqli -> connect_error;
	exit ();
}

?>