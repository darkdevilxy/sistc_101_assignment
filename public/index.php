<!DOCTYPE html>
<html lang="en">
<?php require_once __DIR__ . "/templates/_page_template.php"; ?>

<body>
    <!-- This section mark the beginning of image and discription section-->
    <div class="company_discription">
        <div class="company_discription_image_container">
            <img src="src/dima-panyukov-DwxlhTvC16Q-unsplash.jpg" alt="Company discription image"
                class="company_discription_image">
        </div>
        <div class="company_discription_text_container">
            <h1 style="font-size: 50px; margin-top:2px;"><b>Rent a car and hit the open road!</b></h1>
            <p class="company_discription_text">
                Renting a car has never been easier!
                We are your one-stop shop for all your car rental needs.
                Whether you're looking for a short-term rental or a long-term rental, we have the perfect solution for
                you.
                We offer a wide variety of cars to choose from, so you're sure to find the perfect one for your needs.
                We're committed to providing the best possible service to our customers.
                If you're looking for a car rental company that you can rely on, look no further than us!
            </p>
            <div class="company_discription_button_container">
                <div class="company_discription_allgames_button"><a href="static_pages/all_games.php">Rent Now</a>
                </div>
                <div class="company_discription_about_button"><a href="static_pages/about.html">About</a></div>
            </div>
        </div>
    </div>
    <?php include_once __DIR__ . "/templates/footer.php"; ?>

</body>
<style>
    <?php load_css("index.css");
    ?>
</style>

</html>