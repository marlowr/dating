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

$f3->route('GET /personal_info', function() {
    $template = new Template();
    echo $template->render('pages/personal_info.html');
});

$f3->route('POST /interests', function($f3) {
    $f3->set('interestsin', array('TV', 'Movies', 'Cooking','Board Games','Puzzles','Reading','Playing Cards','Video Games'));
    $f3->set('interestsout', array('Hiking','Biking','Swimming','Collecting','Walking','Climbing'));

    $template = new Template();
    echo $template->render('pages/interests.html');
});

//Run fat free
$f3->run();