<?php
/*
 * Ryan Marlow
 * IT328 - Dating Profile Assignment 2
 * This file is routing page for the dating website, assigning variables and using the fat-free
 * framework to navigate through the pages.
 */
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

$f3->set('states',array('Alabama','Alaska','Arizona','Arkansas','California','Colorado','Connecticut',
    'Delaware','District of Columbia','Florida','Georgia','Hawaii','Idaho','Illinois','Indiana','Iowa',
    'Kansas','Kentucky','Louisiana','Maine','Montana','Nebraska','Nevada','New Hampshire','New Jersey',
    'New Mexico','New York','North Carolina','North Dakota','Ohio','Oklahoma','Oregon','Maryland',
    'Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Pennsylvania','Rhode Island',
    'South Carolina','South Dakota','Tennessee','Texas'	,'Utah','Vermont','Virginia','Washington',
    'West Virginia','Wisconsin','Wyoming'));


//Home / Landing page.
$f3->route('GET /', function() {
    $template = new Template();
    echo $template->render('pages/home.html');
});

//From home page to personal_info page
$f3->route('GET /personal_info', function() {
    $template = new Template();
    echo $template->render('pages/personal_info.html');
});

//From personal_info page to profile page.
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
    if($_POST['gender'] == 'Male' || $_POST['gender'] == 'Female') {
        $_SESSION['gender'] = $_POST['gender'];
    } else {
        $valid = false;
        $f3->set('gendererror','Invalid gender.');
    }
    $f3->set('gender',$_POST['gender']);

    //Add information to member.
    if($_POST['premium'] == "Yes" && $valid == true) {
        $newMember = new PremiumMember($_POST['first-name'],$_POST['last-name'],$_POST['age'],
            $_POST['gender'],$_POST['phone']);
        $_SESSION['newMember'] = $newMember;
        $_SESSION['premium'] = $_POST['premium'];
    } else if($valid == true) {
        $newMember = new Member($_POST['first-name'],$_POST['last-name'],$_POST['age'],
            $_POST['gender'],$_POST['phone']);
        $_SESSION['newMember'] = $newMember;
        $_SESSION['premium'] = "No";
    }

    //If all information is valid, continue with load, otherwise reload page.
    if($valid == true) {
        $template = new Template();
        echo $template->render('pages/profile.html');
    } else {
        $template = new Template();
        echo $template->render('pages/personal_info.html');
    }
});

//From profile page to interests page.
$f3->route('POST /interests', function($f3) {
    include ("model/validate.php");
    $valid = true;

    $member = $_SESSION['newMember'];

    if(validEmail($_POST['email'])) {
        $_SESSION['email'] = $_POST['email'];
    } else {
        $valid = false;
        $f3->set('emailerror','Invalid email.');
    }
    $f3->set('email',$_POST['email']);

    if($valid == true) {
        $member->setSeeking($_POST['seeking']);
        $member->setState($_POST['state']);
        $member->setBio($_POST['biography']);
        $member->setEmail($_POST['email']);
    }

    $_SESSION['state'] = $_POST['state'];
    $_SESSION['seeking'] = $_POST['seeking'];
    $_SESSION['biography'] = $_POST['biography'];
    $f3->set('state',$_POST['state']);
    $f3->set('seeking',$_POST['seeking']);
    $f3->set('email',$_POST['email']);
    $f3->set('biography',$_POST['biography']);

    $_SESSION['newMember'] = $member;

    //If all information is valid, continue with load, otherwise reload page.
    if($valid == true && $_SESSION['premium'] == "Yes") {
        $template = new Template();
        echo $template->render('pages/interests.html');
    } else if($valid == true) {
        $template = new Template();
        echo $template->render('pages/summary.html');
    } else {
        $template = new Template();
        echo $template->render('pages/profile.html');
    }
});

//From interests page to summary page.
$f3->route('POST /summary', function($f3) {
    include ("model/validate.php");
    $valid = true;

    $member = $_SESSION['newMember'];

    //Checks for valid interests input
    if(validInterests($_POST['interests'])) {
        $_SESSION['interests'] = $_POST['interests'];
    } else {
        $valid = false;
        $f3->set('interesterror','Invalid interests.');
    }
    $f3->set('interestselected',array($_POST['interests']));

    $member->setInterests($_SESSION['interests']);


    if($valid == true) {
        $template = new Template();
        echo $template->render('pages/summary.html');
    } else {
        $template = new Template();
        echo $template->render('pages/interests.html');
    }

});

//Run fat free
$f3->run();