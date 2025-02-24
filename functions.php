
<?php

function dd ($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

function urlis ($url) {
    return parse_url($_SERVER['REQUEST_URI'])['path'] === $url;
}