<!DOCTYPE html>
<html lang="en">

<?php include_once __DIR__ . "/../templates/_page_template.php"; ?>

<!-- This section marks the beginning of actual checkout process page-->

<div class="checkout_container">

    <?php

include '../dynamic_pages/db_conn.php';
//global variables
$price = 0;

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
        if ($row["id"] == $_GET["id"]) {
            $price = $row["car_price"];

            echo "
                            <div class='checkout_card'>
                                <div class='checkout_card_image_container'>
                                    <img class='card_image' src='../src/" . $row["car_image"] . "' alt='game_image'>
                                </div>
                                <div class='checkout_card_discription_container'>
                                    <h2 class='checkout_card_discription_heading' class='car_name'>" . $row["car_name"] . "</h2>
                                    <p class='car_description'>" . $row["car_description"] . "</p>
                                    <div class='car_price_container'>
                                        <h3 class='car_price'>Price: " . $row["car_price"] . "</h3>
                                    </div>
                                </div>
                            </div>";
        }
    }
}
else {
    echo "0 results";
}
$conn->close();
?>
    <div class="payment_container">
        <div class="payment_method">
            <form class="card_info_container">
                <Label style="font-size: 22px ;">Enter Card Details</Label>
                <br>
                <label for="card_number">Card Number</label>
                <br>
                <input type="number" name="card_number" class="card_number">
                <br>
                <label for="expiry">Expiry: </label>
                <select name="month" id="month">
                    <option value="jan">Jan</option>
                    <option value="feb">feb</option>
                    <option value="mar">mar</option>
                    <option value="apr">apr</option>
                    <option value="may">may</option>
                    <option value="jun">jun</option>
                    <option value="jul">jul</option>
                    <option value="aug">aug</option>
                    <option value="sep">sep</option>
                    <option value="oct">oct</option>
                    <option value="nov">nov</option>
                    <option value="dec">dec</option>
                </select>
                <select name="year" id="year">
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                </select>

                <div class="name">
                    <div class="first_name">
                        <label for="first_name">First Name</label>
                        <br>
                        <input type="text" name="first_name" id="first_name">
                    </div>
                    <div class="last_name">
                        <label for="last_name">Last Name</label>
                        <br>
                        <input type="text" name="last_name" id="last_name">
                    </div>
                </div>

                <label for="address">Address</label>
                <br>
                <input type="text" name="address" class="address">
                <br>
                <input type="button" class="place_order" value="Place Order" onclick="placeOrder()"></input>
            </form>
        </div>
        <div class="order_summary_container">
            <H2>Order Summary</H2>
            <div class="sub_total">
                <label for="sub_total">Sub Total:</label>
                <br>
                <br>
                <label for="price">Price:
                    <? echo "$price"?> </label>
                    <br>
                    <label for="shipping_fee">Duration: 7 days</label>
                    <hr>
                    <label class="total" for="total"> Total: <? echo $price+ 0.1 * $price ?></label>

                </div>
            </div>
        </div>
    </div>

</div>
<?php include_once __DIR__ . "/../templates/footer.php"; ?>
                    </body>
                    <script>
                        function placeOrder() {
                            alert("Order Placed");
                            window.location.href = "../static_pages/all_games.php";

                        }
                    </script>
                    <style>
                        <?php load_css("collective_css.css");
?>
                    </style>

</html>