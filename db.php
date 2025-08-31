<?php

include('connection.php');

$sql = "CREATE DATABASE IF NOT EXISTS student_db" ; 

if ($conn -> query($sql) === true) {
    echo "Database created" . "<br>";
}
else{
    echo "error creating database" . $conn->error;
}


$usedb = "USE student_db";

$conn -> query($usedb);

$tables = "CREATE TABLE IF NOT EXISTS student_data (

id INT AUTO_INCREMENT PRIMARY KEY,
student_name VARCHAR(255) NOT NULL,
stu_father_name VARCHAR(255) NOT NULL,
stu_subject VARCHAR(255) NOT NUll,
Stu_roll_num INT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

)";

if ($conn->query($tables) === True) {
    echo  "Tables Created <br>";
}
else{
    echo "ERROR" . $conn->error;
}

$alteration = "ALTER TABLE student_data ADD password VARCHAR(255) NOT NULL AFTER student_name";

if ($conn -> query($alteration) === TRUE) {
    echo "Table ADDED";
}
else{
    echo "Error adding column" . $conn->error;
}