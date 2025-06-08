<?php

$host = "db"; // nome do serviço MySQL no docker-compose
$user = "netshoes";
$pass = "netshoes";
$bd   = "netshoes";

$mysqli = new mysqli($host, $user, $pass, $bd);

if ($mysqli->connect_errno) {
    echo "connect failed: " . $mysqli->connect_error;
    exit();
}

?>
