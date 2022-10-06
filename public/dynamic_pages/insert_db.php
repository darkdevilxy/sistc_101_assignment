<?php
include 'db_conn.php';

$car_name = $_POST['car_name'];
$price = $_POST['price'];
$car_descriptor = $_POST['car_descriptor'];
$car_image = $_POST['picture'];

$conn = OpenCon("cars");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO cars (car_name, car_price, car_description, car_image) VALUES ('$car_name', '$price' ,'$car_descriptor', '$car_image')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('New record created successfully');</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

CloseCon($conn);

header("Location: admin_page.php");
exit();
?>