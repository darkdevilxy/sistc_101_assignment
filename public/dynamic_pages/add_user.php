<!DOCTYPE html>
<html lang="en">
<?php include_once __DIR__ . "/../templates/_page_template.php"; ?>

<!--This section marks the beginning of donate page -->

<div class="donation_card_container">
    <form method="POST" class="donation_form" action="./add_user.php">
        <div class="donation_form_container">
            <label for="first_name">Picture:</label>
            <br>
            <input type="file" name="picture" id="picture">
            <br>
            <label for="first_name">Username:</label>
            <br>
            <input type="text" name="username" id="username">
            <br>
            <label type="text">Password</label>
            <br>
            <input type="password" name="password" id="password">
            <br>
            <br>
            <input type="submit" value="Submit">
        </div>
    </form>
</div>


<!-- This section defines the footer for webpages-->
<div class="webpage_footer_container">
    <footer class="webpage_footer">
        <div class="footer_contact_container">
            <h3 class="title_footer_section">Contact Us</h3>
            <div class="facebook_link_container">
                <a href="https://www.facebook.com/darkdevilxy/">
                    <img src="../src/icons/facebook.svg" alt="facebook_icon">
                </a>
            </div>
            <div class="github_link_container">
                <a href="https://github.com/darkdevilxy">
                    <img src="../src/icons/github.svg" alt="github_icon">
                </a>
            </div>
            <div class="gitlab_link_container">
                <a href="https://gitlab.com/darkdevilxy">
                    <img src="../src/icons/gitlab.svg" alt="gitlab_icon">
                </a>
            </div>
            <div class="email_link_container">
                <a href="mailto:bhumagainxy@gmail.com">
                    <img src="../src/icons/mail.svg" alt="gmail_icon">
                </a>
            </div>
            <div class="phone_link_container">
                <a href="https://wa.me/+61411930744">
                    <img src="../src/icons/phone (1).svg" alt="whatsapp_icon">
                </a>
            </div>

        </div>
        <div class="footer_teams_container">
            <h3 class="title_footer_section">Team Members</h3>
            <div class="team_member_bibek">Bibek</div>

        </div>
        <div class="footer_games_container">
            <h3 class="title_footer_section">Games</h3>
            <div class="game_chocolate_run">Chocolate Run</div>
            <div class="game_gun_fight">Gun Fight</div>
            <div class="fire_fighter">Fire Fighter</div>

        </div>
    </footer>
</div>
<?php include_once __DIR__ . "/../templates/footer.php"; ?>

</body>
<style>
    <?php load_css("collective_css.css");
    ?>
</style>

</html>