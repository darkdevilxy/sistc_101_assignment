<?php
include_once 'db_conn.php';
$id_array = array();

$search_text = $_POST['search'];

$conn = OpenCon("cars");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, car_name FROM cars";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if (strpos(strtolower($row["car_name"]), strtolower($search_text)) !== false) {
            array_push($id_array, $row["id"]);
        }
    }
}
else {
    echo "0 results";
    header("Location: all_cars.php");
}
$conn->close();
$text = json_encode($id_array);
$url = urlencode($text);
header("Location: all_cars.php?id=" . $url);
?>