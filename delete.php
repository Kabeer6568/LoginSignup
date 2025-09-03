<?php
require_once "connection.php";
session_start();

// Check if the user is logged in
if (!isset($_SESSION['student_name'])) {
    // If not logged in, redirect to login page
    header("Location: index.php");
    exit(); // Stop further code execution
}

// If logged in, show the page
echo "<h1>Welcome, " . htmlspecialchars($_SESSION['student_name']) . "!</h1>";
echo "<p>This page is only for logged-in users.</p>";

$id = $_GET['id'];

$sql_del = "DELETE FROM student_data WHERE id='$id' ";

if ($conn->query($sql_del)) {
    header("Location: view.php");
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}