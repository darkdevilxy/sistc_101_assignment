<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "aayushgta";

function OpenCon($db)
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "aayushgta";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

    return $conn;
}

function CloseCon($conn)
{
    $conn->close();
}
