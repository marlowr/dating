<?php

function validName($string) {
    if(ctype_alpha($string)) {
        return true;
    }
}


function validAge($age) {
    if(ctype_digit($age) && $age >= 18) {
        return true;
    }
}


function validPhone($phone) {
    $phone = filter_var($phone,FILTER_SANITIZE_STRING);
    if(strlen($phone)>=7 || strlen($phone)<=10) {
        $_SESSION['phone'] = $phone;
        return true;
    }
}

function validEmail($email) {
    if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
        return true;
    }
}

function validInterests($interests) {
    global $f3;
    return in_array($interests, $f3->get('interests'));
}
