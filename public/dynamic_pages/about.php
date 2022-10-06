<!DOCTYPE html>
<html lang="en">

<?
include_once __DIR__ . "/../templates/_page_template.php";
?>

<!-- This section contains main body for about page-->
<?php

include '../dynamic_pages/db_conn.php';
// Create connection
$conn = OpenCon("users");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo " <div class='card'>
                        <div class='card_image_container'>
                            <img class='card_image' src='../src/" . $row["image"] . "' alt='game_image'>
                        </div>
                        <div class='card_discription_container'>
                            <h2 class='car_name'>" . $row["username"] . "</h2>
                        </div>
                    </div>
                    ";
    }
}
else {
    echo "0 results";
}
$conn->close();
?>
<?php include_once __DIR__ . "/../templates/footer.php"; ?>
</body>
<style>
    <?php load_css("collective_css.css");
    ?>
</style>

</html>