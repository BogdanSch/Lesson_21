<?php
require_once "config.php";

$conn = new mysqli($servername, $username, $password, $dbname);

try {
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
