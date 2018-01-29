<?php

session_start();

//Require the autoload file
require_once ('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Set debug level
$f3->set('DEBUG',3);

//Define a page1 route
$f3->route('GET /', function() {
    $template = new Template();
    echo $template->render('pages/home.html');
});

//Run fat free
$f3->run();