<?php

require_once "connection.php";

if (isset($_POST['submit'])) {
    $s_name = $_POST['student_name'];
    $s_f_name = $_POST['stu_father_name'];
    $pass = $_POST['password'];
    $s_subject = $_POST['stu_subject'];
    $s_roll_num = $_POST['Stu_roll_num'];

    $hashed_pass = password_hash($pass, PASSWORD_BCRYPT);

 
    $sql_query = "INSERT INTO student_data (student_name , password , stu_father_name , stu_subject , Stu_roll_num) VALUES
     ('$s_name' , '$hashed_pass' , '$s_f_name' , '$s_subject' , '$s_roll_num')";

     $sql_validation_query = "SELECT * FROM student_data WHERE Stu_roll_num = $s_roll_num LIMIT 1";

    $res = $conn->query($sql_validation_query);

    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();

        $stored_roll_num = $row['Stu_roll_num'];

        if ($s_roll_num == $stored_roll_num) {
            echo "Roll Number Already Exists";
        }
    } 
    elseif ($conn -> query($sql_query)) {
        echo "Data Added";
    }
    else{
        echo "Error" . $conn -> error;
    }

    

    
}

?>




<h1>
    Register Form
</h1>

<form method="POST">
    <label for="">Student Name
        <input type="text" name="student_name" required>
    </label>
    <br>
    <br>
    <label for="">Password
        <input type="text" name="password" required>
    </label>
    <br>
    <br>
    <label for="">Student Father Name
        <input type="text" name="stu_father_name" required>
    </label>
    <br>
    <br>
    <label for="">Student Subject
        <input type="text" name="stu_subject" required>
    </label>
    <br>
    <br>
    <label for="">Student Roll Number
        <input type="text" name="Stu_roll_num" required>
    </label>
<br><br>
    <input type="submit" value="submit" name="submit">
    
</form>