<?php
/*
 * Ryan Marlow
 * 2/2/2018
 * This file contains the validation for the dating profile site.
 *
 */


class Validate
{
    //Validates string to be only alphabetic characters
    function validName($string)
    {
        if (ctype_alpha($string)) {
            return true;
        }
    }


    //Validates age is numbers, over 18 and under 100.
    function validAge($age)
    {
        if (ctype_digit($age) && $age >= 18 && $age <= 100) {
            return true;
        }
    }

    //validates phone number is all digits, and between 7-10 digits.
    function validPhone($phone)
    {
        $phone = filter_var($phone, FILTER_SANITIZE_STRING);
        if (strlen($phone) >= 7 && strlen($phone) <= 10 && ctype_digit($phone)) {
            $_SESSION['phone'] = $phone;
            return true;
        }
    }

    //Validates email through the php Filter validation.
    function validEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
    }

    //Checks the interests array against the $f3 hive of interests set.
    function validInterests($interests)
    {
        global $f3;
        foreach ($interests as $interest) {
            if (!in_array($interest, $f3->get('interests'))) {
                return false;
            };
        }
        return true;
    }
}
