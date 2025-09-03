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

$view_query = "SELECT * FROM student_data";

$result = $conn->query($view_query);

while ($row = $result->fetch_assoc()) {
    


?>

<a href="logout.php">Logout</a>


<table>
    <tr>
        <th>
            Student Name
        </th>
        <th>
            Student Father Name
        </th>
        <th>
            Student Subject
        </th>
        <th>
            Student Roll Number
        </th>
        <th>
            Update

        </th>
    </tr>
    <tr>
        <td>
           <?php echo $row['student_name'] ?>
        </td>
        <td>
            <?php echo $row['stu_father_name'] ?>
        </td>
        <td>
            <?php echo $row['stu_subject'] ?>
        </td>
        <td>
            <?php echo $row['Stu_roll_num'] ?>
        </td>
        <td>
            <button>
                <a href="edit.php?id=<?php echo $row['id'] ?>">Update</a>
            </button>
            <button>
                <a href="delete.php?id=<?php echo $row['id'] ?>">DELETE</a>
            </button>
        </td>
    </tr>
</table>

<?php }