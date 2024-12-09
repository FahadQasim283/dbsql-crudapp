<?php
include 'db.php';

$sql = "SELECT * FROM studentInfo";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['Name']}</td>";
        echo "<td>{$row['semester']}</td>";
        echo "<td>{$row['CGPA']}</td>";
        echo "<td>
            <a href='edit.php?id={$row['id']}' class='btn btn-edit'>Edit</a>
            <a href='delete.php?id={$row['id']}' class='btn btn-delete'>Delete</a>
        </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No data found</td></tr>";
}
?>
