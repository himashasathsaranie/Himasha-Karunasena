<?php

phpinfo();

$servername = "localhost";
$username = "id21090695_contactus";
$password = "Contact@123";
$database_name = 'id21090695_contact_db';


$conn = new mysqli($servername, $username, $password, $database_name);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connection successful";


$conn->close();
?>