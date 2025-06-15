<?php
$host = 'localhost';
$db = 'test_db';
$user = 'root';
$pass = ''; // standaard bij XAMPP

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}
?>
