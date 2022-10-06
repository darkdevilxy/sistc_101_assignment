<?php
$page = $_GET["page"];
function redirect($page)
{
    header("Location: " . $page);
    exit();
}