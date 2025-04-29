<?php

require 'functions.php'; 

$uri = $_SERVER['REQUEST_URI'];

// dd(parse_url($uri));

if ($uri === '/') {
    require 'controllers/index.php';
} elseif ($uri === '/about') {
    require 'controllers/about.php';
} elseif ($uri === '/contact') {
    require 'controllers/contact.php';
}
//  else {
//     http_response_code(404);
//     // require 'controllers/404.php';
// }