<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'],'/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('','DefaultController');
Routing::get('homepage','DefaultController');
Routing::get('user','DefaultController');
Routing::post('login','SecurityController');
Routing::get('shifts','DefaultController');
Routing::get('holidays','DefaultController');
Routing::get('workedtime','DefaultController');
Routing::get('swap','DefaultController');
Routing::post('addPhoto','PhotoController');

Routing::run($path);

