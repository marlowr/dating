<?php
//Require the autoload file
require_once ('vendor/autoload.php');
session_start();

//Create an instance of the Base class
$f3 = Base::instance();

//Set debug level
$f3->set('DEBUG',3);

$f3->set('interests', array('TV', 'Movies', 'Cooking','Board Games','Puzzles',
    'Reading','Playing Cards','Video Games','Hiking','Biking','Swimming',
    'Collecting','Walking','Climbing'));

$f3->set('interestsin', array('TV', 'Movies', 'Cooking','Board Games','Puzzles',
    'Reading','Playing Cards','Video Games'));

$f3->set('interestsout', array('Hiking','Biking','Swimming','Collecting',
    'Walking','Climbing'));


//Define a page1 route
$f3->route('GET /', function() {
    $template = new Template();
    echo $template->render('pages/home.html');
});

$f3->route('GET /personal_info', function() {
    $template = new Template();
    echo $template->render('pages/personal_info.html');
});

$f3->route('POST /profile', function($f3) {
    include ("model/validate.php");
    $valid = true;

    //Validates first name
    if(validName($_POST['first-name'])) {
        $_SESSION['first-name'] = $_POST['first-name'];
    } else {
        $valid = false;
        $f3->set('firsterror','Invalid first name.');
    }
    $f3->set('firstname',$_POST['first-name']);

    //validates last name
    if(validName($_POST['last-name'])) {
        $_SESSION['last-name'] = $_POST['last-name'];
    } else {
        $valid = false;
        $f3->set('lasterror','Invalid last name.');
    }
    $f3->set('lastname',$_POST['last-name']);

    //Validates age
    if(validAge($_POST['age'])) {
        $_SESSION['age'] = $_POST['age'];
    } else {
        $valid = false;
        $f3->set('ageerror','Invalid age.');
    }
    $f3->set('age',$_POST['age']);

    //Validates phone number
    if(validPhone($_POST['phone'])) {
        $_SESSION['phone'] = $_POST['phone'];
    } else {
        $valid = false;
        $f3->set('phoneerror','Invalid phone number');
    }
    $f3->set('phone',$_SESSION['phone']);

    //validates gender
    if($_POST['gender'] == 'male' || $_POST['gender'] == 'female') {
        $_SESSION['gender'] = $_POST['gender'];
    } else {
        $valid = false;
        $f3->set('gendererror','Invalid gender. Nice try.');
    }
    $f3->set('gender',$_POST['gender']);

    //If all information is valid, continue with load, otherwise reload page.
    if($valid == true) {
        print_r($_SESSION);
        $template = new Template();
        echo $template->render('pages/profile.html');
    } else {
        $template = new Template();
        echo $template->render('pages/personal_info.html');
    }
});


$f3->route('POST /interests', function($f3) {
    include ("model/validate.php");
    if(validEmail($_POST['email'])) {
        $_SESSION['email'] = $_POST['email'];
        $f3->set('email',$_POST['email']);
    }

    $_SESSION['state'] = $_POST['state'];
    $_SESSION['seeking'] = $_POST['seeking'];
    $_SESSION['biography'] = $_POST['biography'];


    $template = new Template();
    echo $template->render('pages/interests.html');
});

$f3->route('POST /summary', function($f3) {
    include ("model/validate.php");
    $_SESSION['interests'] = $_POST['interests'];
    foreach ($_SESSION as $value) {

    }
    print_r($_SESSION);
    $template = new Template();
    echo $template->render('pages/summary.html');
});

//Run fat free
$f3->run();