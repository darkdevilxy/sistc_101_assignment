<!DOCTYPE html>
<html lang="en">

<?php include_once __DIR__ . "/../templates/_page_template.php";
include_once 'db_conn.php';
?>
<!--This section marks the beginning of donate page -->
<div class="body_section">
    <div class="donation_card_container">
        <form method="post" class="donation_form" action="insert_db.php">
            <div class="donation_form_container">
                <label for="car_image">Picture:</label>
                <br>
                <input type="file" name="picture" id="picture">
                <br>
                <label for="car_name">car_name</label>
                <br>
                <input type="text" name="car_name" id="car_name">
                <br>
                <label type="text">Price</label>
                <br>
                <input type="number" name="price" id="price">
                <br>
                <input type="textbox" name="car_descriptor" id="description">
                <br>
                <br>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <div class="database_listing_container">
        <form method="POST" class="database_listing">
            <table>
                <tr>
                    <th>Picture</th>
                    <th>Car Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Update</th>
                </tr>
                <?php
$conn = OpenCon("cars");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM cars";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row['car_image'] . "</td><td>" . $row['car_name'] . "</td><td>" . $row['car_price'] . "</td><td><a href='delete_db.php?id=" . $row['id'] . "'>Delete</a></td></tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}
?>
            </table>
        </form>
    </div>
</div>
<?php include_once __DIR__ . "/../templates/footer.php"; ?>

</body>
<style>
    <?php load_css("collective_css.css");
?>
</style>

</html>