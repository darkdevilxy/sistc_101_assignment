<!DOCTYPE html>
<html lang="en">
<?php include_once __DIR__ . "/../templates/_page_template.php";
?>

<!-- This section contains Search Bar for about page-->
<form class="search_form" method="POST" action="process_search.php">
    <input class="search" type="search" name="search" id="search" placeholder="Search for a car">
    <input class="search_button" type="submit" value="Search">
</form>



<div class="grid_container">
    <?php
$url = json_encode("");
if (count($_GET) !== 0) {
    $url = urldecode($_GET["id"]);
}
$array_id = json_decode($url);

include '../dynamic_pages/db_conn.php';
// Create connection
$conn = OpenCon("cars");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, car_name, car_price, car_image, car_description FROM cars";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if (empty($_GET["id"])) {
            echo "
            <div class='card'>
                <div class='card_image_container'>
                    <img class='card_image' src='../src/" . $row["car_image"] . "' alt='game_image'>
                </div>
                <div class='card_discription_container'>
                    <h2 class='car_name'>" . $row["car_name"] . "</h2>
                    <p class='car_description'>" . $row["car_description"] . "</p>
                    <div class='car_price_container'>
                        <h3 class='car_price'>Price: " . $row["car_price"] . "</h3>
                    </div>
                    <div class='rent_car_Container'>
                        <a href='../dynamic_pages/payment.php?id=" . $row["id"] . "'>
                            <input type='button' class='game_buy_button' value='Rent Now' ></input>
                        </a>
                    </div>
                </div>
            </div>";
        }
        else {
            foreach ($array_id as $id) {
                if ($row["id"] == $id) {
                    echo "
                    <div class='card'>
                        <div class='card_image_container'>
                            <img class='card_image' src='../src/" . $row["car_image"] . "' alt='game_image'>
                        </div>
                        <div class='card_discription_container'>
                            <h2 class='car_name'>" . $row["car_name"] . "</h2>
                            <p class='car_description'>" . $row["car_description"] . "</p>
                            <div class='car_price_container'>
                                <h3 class='car_price'>Price: " . $row["car_price"] . "</h3>
                            </div>
                            <div class='rent_car_Container'>
                                <a href='../dynamic_pages/payment.php?id=" . $row["id"] . "'>
                                    <input type='button' class='game_buy_button' value='Rent Now' ></input>
                                </a>
                            </div>
                        </div>
                    </div>";
                }
            }
        }
    }
}
else {
    echo "0 results";
}
$conn->close();
?>
</div>

<!-- This section defines the footer for webpages-->
<?php include_once __DIR__ . "/../templates/footer.php"; ?>


</body>
<style>
    <?php load_css("collective_css.css");
    ?>
</style>

</html>