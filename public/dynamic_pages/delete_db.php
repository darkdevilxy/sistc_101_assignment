<?php
include 'db_conn.php';

$id = $_GET['id'];
$conn = OpenCon("cars");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM cars WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Record_Altered');</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

CloseCon($conn);

header("Location: admin_page.php");
?>