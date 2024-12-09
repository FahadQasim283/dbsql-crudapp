<?php
include 'db.php';

function insertData($conn)
{
    $name = "John Doe";
    $semester = "5";
    $cgpa = "3.8";

    $stmt = $conn->prepare("INSERT INTO studentInfo (Name, semester, CGPA) VALUES (?, ?, ?)");
    $stmt->bind_param("ssd", $name, $semester, $cgpa);
    
}
if (isset($_POST['insert'])) {
    insertData($conn);
}
?>

<form method="post">
    <button type="submit" name="insert">Add Data</button>
</form>