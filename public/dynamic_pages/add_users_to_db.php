<?php
include 'db_conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

$conn = OpenCon("users");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (username, user_password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('New record created successfully');</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

CloseCon($conn);

header("Location: /../index.php");
exit();
?>