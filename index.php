<?php

$heading = "Home Page";

function dd() {
    echo "<pre>";
    var_dump(func_get_args());
    echo "</pre>";
    die();
}

function urlIs($url) {
    return $_SERVER['REQUEST_URI'] === $url;
}

require "views/index.view.php";