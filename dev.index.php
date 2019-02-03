<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|woff|woff2|ttf|eot|svg)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} else {
    $directory = '/';
    include_once 'site.php';
}
