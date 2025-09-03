<?php

require_once "connection.php";
session_start();

if (isset($_POST['login'])) {
    $s_name = $_POST['student_name'];
    $pass = $_POST['user_password'];

    $sql_login_query = "SELECT * FROM student_data WHERE student_name = '$s_name' LIMIT 1";
    
    $res = $conn->query($sql_login_query);

    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();

        $stored_hash = $row['password'];

        if (password_verify($pass, $stored_hash)) {

            $_SESSION['student_name'] = $row['student_name'];
            $_SESSION['roll_num'] = $row['Stu_roll_num'];

            echo "Login Successfull";
        }
        else{
            echo "Incorrect Password";
        }
    }
    else{
    echo "Invalid Student name";
}
}


?>

<h1>
    Login Form
</h1>



<form method="POST">

    <label for="">Student Name
        <input type="text" name="student_name" required>
    </label>
    <br>
    <br>
    <label for="">Password
        <input type="text" name="user_password" required>
    </label>
    <br><br>
    <input type="submit" value="login" name="login">
    
</form>

<button type="button">
    <a href="register.php">Register</a>
</button>


