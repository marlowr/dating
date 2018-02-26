<?php
/**
 * Created by PhpStorm.
 * User: mrrya
 * Date: 2/13/2018
 * Time: 12:06 PM
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

    public function setGender($gender)
    {
        $this->gender = $gender;
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

    public function setAge($age)
    {
        $this->age = $age;
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
        if($this->seeking != null) {
            return $this->seeking;
        } else {
            return "N/A";
        }
    }

    public function setSeeking($seeking)
    {
        $this->seeking = $seeking;
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