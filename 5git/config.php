<?php
$host = "127.0.0.1";
$user = "change";
$pass = "change";
$db = "jv";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
