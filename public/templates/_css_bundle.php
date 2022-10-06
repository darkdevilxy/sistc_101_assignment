<?php
function load_css($file)
{
    $path_local = __DIR__ . "/_css/" . $file;
    $path_public = __DIR__ . "/../css/" . $file;
    if (file_exists($path_local)) {
        include $path_local;
    }
    elseif (file_exists($path_public)) {
        include $path_public;
    }
    else {
        echo "Error: CSS file not found";
    }
}