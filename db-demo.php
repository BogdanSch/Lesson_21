<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
// Создание соединения
// $conn = new mysqli($servername, $username, $password);
// // Check connection 
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Создание базы данных
// $sql = "CREATE DATABASE $dbname";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }
// mysqli_close($conn);

// Создание соединения
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Проверка соединения
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// запрос sql для создания таблицы
// $sql = "CREATE TABLE MyGuests (
// id INT AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP
// )";
// if (mysqli_query($conn, $sql)) {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }
// mysqli_close($conn);

// $sql = "INSERT INTO MyGuests (firstname, lastname, email) 
//  VALUES ('John', 'Doe', 'john@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email) 
//  VALUES ('Mary', 'Moe', 'mary@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email) 
//  VALUES ('Julie', 'Dooley', 'julie@example.com')";
// if ($conn->multi_query($sql) === TRUE) {
//     echo "New records created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
// $conn->close();

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);
// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . " ";
    }
} else {
    echo "0 results";
}
$conn->close();