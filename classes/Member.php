<?php
/**
 * This class holds the information for the member object.
 *
 * @author Ryan Marlow <rmarlow@mail.greenriver.edu>
 * @version 2.0
 */

class Member
{
    protected $fname;
    protected $lname;
    protected $gender;
    protected $phone;
    protected $age;
    protected $email;
    protected $state;
    protected $seeking;
    protected $bio;

    public function __construct($fname,$lname,$age,$gender,$phone) {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->gender = $gender;
        $this->phone = $phone;
    }
    public function getFname()
    {
        return $this->fname;
    }

    public function setFname($fname)
    {
        $this->$fname = $fname;
    }

    public function getLname()
    {
        return $this->lname;
    }

    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    public function getGender()
    {
        return $this->gender;
    }

    //Checks gender against male and female input.
    public function setGender($gender)
    {
        if(preg_match('/^Male|Female$/',$gender)) {
            $this->gender = $gender;
        } else {
            $this->gender = null;
        }
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getAge()
    {
        return $this->age;
    }

    //Sets age, with validation of non-negative and all digits.
    public function setAge($age)
    {
        if(preg_match('/^[\d]{2}$/',$age)) {
            $this->age = $age;
        } else {
            $this->age = null;
        }
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }
    public function getSeeking()
    {
        return $this->seeking;
    }

    //Checks seeking against male or female text only.
    public function setSeeking($seeking)
    {
        if(preg_match('/^Male|Female$/i',$seeking)) {
            $this->seeking = $seeking;
        } else {
            $this->seeking = null;
        }
    }
    public function getBio()
    {
        return $this->bio;
    }

    public function setBio($bio)
    {
        $this->bio = $bio;
    }
}