<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$city = "'s Hertogenbosch";
$city = $conn->real_escape_string($city);

if (!$conn->query($sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('" . $city . "', 'Koop', 'koop  @example.com')")) {
    printf("Ошибка: %s\n", $conn->sqlstate);
} else {
    printf("%d строк вставлено.\n", $conn->affected_rows);
}