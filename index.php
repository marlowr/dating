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

$f3->route('POST /profile', function() {

    $_SESSION['first-name'] = $_POST['first-name'];
    $_SESSION['last-name'] = $_POST['last-name'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['gender'] = $_POST['gender'];
    $template = new Template();
    echo $template->render('pages/profile.html');
});


$f3->route('POST /interests', function($f3) {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['state'] = $_POST['state'];
    $_SESSION['seeking'] = $_POST['seeking'];
    $_SESSION['biography'] = $_POST['biography'];
    $f3->set('interestsin', array('TV', 'Movies', 'Cooking','Board Games','Puzzles','Reading','Playing Cards','Video Games'));
    $f3->set('interestsout', array('Hiking','Biking','Swimming','Collecting','Walking','Climbing'));

    $template = new Template();
    echo $template->render('pages/interests.html');
});

$f3->route('POST /summary', function($f3) {
    $template = new Template();
    echo $template->render('pages/summary.html');
});

//Run fat free
$f3->run();