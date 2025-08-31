<?php


$username = "root";
$pass = "";
$host = "localhost";
$dbname = "student_db";

$conn = new mysqli($host , $username , $pass , $dbname);

if ($conn -> connect_error) {
    die( "Connection Failed : " . $conn->connect_error );
}