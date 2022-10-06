<?php require_once __DIR__ . "/../config.php"; ?>

<nav class="navbar_container">
    <div class="navigation_bar">
        <div class="right_container">
            <div class="home_with_logo">
                <a href="<? echo $about?>">
                    <div class="logo_container">
                        <img height="38px" src="<? echo $src?>/clipart1940138.png" alt="LOGO"
                            style="object-fit: cover;">
                    </div>
                    <div class="logo_text_container">Easy Rental</div>
                </a>
            </div>
            <div class="home"><a href="<? echo $index?>">Home</a></div>
            <div class="games"><a href="<? echo $all_cars?>">Cars</a></div>
        </div>
        <div class="left_container">
            <div class="donate" style="color: red;"><a href="<? echo $login?>">Login</a></div>
            <div class="about"><a href="<? echo $about?>">Booked Cars</a></div>
        </div>
    </div>
</nav>
<style>
    <? load_css("navbar.css");
    ?>
</style>