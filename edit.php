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

$result = $conn->query("SELECT * FROM student_data WHERE id = '$id'");
$student = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $student_name = $_POST['student_name'];
    $stu_father_name = $_POST['stu_father_name'];
    $stu_subject = $_POST['stu_subject'];
    $Stu_roll_num =$_POST['Stu_roll_num'];

    $sql = "UPDATE student_data SET student_name = '$student_name', stu_father_name = '$stu_father_name' , stu_subject = '$stu_subject',
    Stu_roll_num = '$Stu_roll_num' WHERE id = '$id' ";

    if ($conn->query($sql)) {
        echo "UPDATED";    
    }
    else{
        echo "ERROR";
    }
}




?>

<a href="logout.php">Logout</a>

<form method="POST">
    <input type="text" name="student_name" value="<?php echo $student['student_name'] ?>" required>
    <br>
    <input type="text" name="stu_father_name" value="<?php echo $student['stu_father_name'] ?>" required>
    <br>
    <input type="text" name="stu_subject" value="<?php echo $student['stu_subject'] ?>" required>
    <br>

    <input type="text" name="Stu_roll_num" value="<?php echo $student['Stu_roll_num'] ?>" required>
    <br>
    <button type="submit" name="update">Update</button>
</form>

<?php 
