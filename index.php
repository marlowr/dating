<?php
/*
 * Ryan Marlow
 * IT328 - Dating Profile Assignment 2
 * This file is routing page for the dating website, assigning variables and using the fat-free
 * framework to navigate through the pages.
 */
//Require the autoload file
require_once ('vendor/autoload.php');
require('model/Db.php');
session_start();

//Turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
$database = new Db();

//Create an instance of the Base class
$f3 = Base::instance();

//Set debug level
$f3->set('DEBUG',3);

//Sets all interests
$f3->set('interests', array('TV', 'Movies', 'Cooking','Board Games','Puzzles',
    'Reading','Playing Cards','Video Games','Hiking','Biking','Swimming',
    'Collecting','Walking','Climbing'));

//Sets indoor interests
$f3->set('interestsin', array('TV', 'Movies', 'Cooking','Board Games','Puzzles',
    'Reading','Playing Cards','Video Games'));

//Sets outdoor interests
$f3->set('interestsout', array('Hiking','Biking','Swimming','Collecting',
    'Walking','Climbing'));

//Sets states variables
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
    $_SESSION['newMember'] = new Member("","","","","");
    $_SESSION['premium'] = "";
    $template = new Template();
    echo $template->render('pages/personal_info.html');
});

//From personal_info page to profile page.
$f3->route('POST /profile', function($f3) {
    include ("model/validate.php");
    $valid = true;

    //Validates first name
    if(!validName($_POST['first-name'])) {
        $valid = false;
        $f3->set('firsterror','Invalid first name.');
    }

    //validates last name
    if(!validName($_POST['last-name'])) {
        $valid = false;
        $f3->set('lasterror','Invalid last name.');
    }

    //Validates age
    if(!validAge($_POST['age'])) {
        $valid = false;
        $f3->set('ageerror','Invalid age.');
    }

    //Validates phone number
    if(!validPhone($_POST['phone'])) {
        $valid = false;
        $f3->set('phoneerror','Invalid phone number');
    }

    //validates gender
    if(!($_POST['gender'] == 'Male' || $_POST['gender'] == 'Female')) {
        $valid = false;
        $f3->set('gendererror','Invalid gender.');
    }


    //Add information to member.
    if($_POST['premium'] == "Yes" && $valid == true) {
        $newMember = new PremiumMember($_POST['first-name'],$_POST['last-name'],$_POST['age'],
                                        $_POST['gender'],$_POST['phone']);
        $_SESSION['premium'] = "Yes";
    } else if($valid == true) {
        $newMember = new Member($_POST['first-name'],$_POST['last-name'],$_POST['age'],
                                    $_POST['gender'],$_POST['phone']);
        $_SESSION['premium'] = "No";
    }

    //Assigns newMember variable to the session.
    $_SESSION['newMember'] = $newMember;

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

    //Assigns the variable newMember from the session variable.
    $newMember = $_SESSION['newMember'];

    //Checks for valid email.
    if(!validEmail($_POST['email'])) {
        $valid = false;
        $f3->set('emailerror','Invalid email.');
    }

    //Adds new information to the newMember object.
    if(!empty($_POST['seeking'])) {
        $newMember->setSeeking($_POST['seeking']);
    }

    if(!empty($_POST['seeking'])) {
        $newMember->setState($_POST['state']);
    }

    if(!empty($_POST['seeking'])) {
        $newMember->setBio($_POST['biography']);
    }

    if(!empty($_POST['seeking'])) {
        $newMember->setEmail($_POST['email']);
    }


    //Reassigns the newMember object to the session.
    $_SESSION['newMember'] = $newMember;

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
    $database = new Db();
    //Grabs member object from session.
    $newMember = $_SESSION['newMember'];

    //Checks for valid interests input
    if(!validInterests($_POST['interests'])) {
        $valid = false;
        $f3->set('interesterror','Invalid interests.');
    }

    //Sets interests to the newMember variable.
    $newMember->setInterests($_POST['interests']);
    $_SESSION['newMember'] = $newMember;

    //Adds a new member to the database.
    $database->addMember($newMember->getFname(),$newMember->getLname(),$newMember->getAge(),
        $newMember->getGender(),$newMember->getPhone(),$newMember->getEmail(),
        $newMember->getState(),$newMember->getSeeking(),$newMember->getBio(),
        ($newMember->getPremium == "Yes") ? 1 : 0,$newMember->getImage(),
        implode(",",$newMember->getInterests()));


    if($valid == true) {
        $template = new Template();
        echo $template->render('pages/summary.html');
    } else {
        $template = new Template();
        echo $template->render('pages/interests.html');
    }
});

$f3->route('GET /admin', function($f3) {

    $f3->set('members',getMembers());
    $template = new Template();
    echo $template->render('pages/admin.html');
});

//Run fat free
$f3->run();