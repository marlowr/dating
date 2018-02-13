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

    public function Member($fname,$lname,$age,$gender,$phone) {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->gender = $gender;
        $this->phone = $phone;
    }
    public function getFname($fname)
    {
        return $fname;
    }

    public function setFname($fname)
    {
        $this->$fname = $fname;
    }

    public function getLname($lname)
    {
        return $lname;
    }

    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    public function getGender($gender)
    {
        return $gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getPhone($phone)
    {
        return $phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getAge($age)
    {
        return $age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getEmail($email)
    {
        return $email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getState($state)
    {
        return $state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }
    public function getSeeking($seeking)
    {
        return $seeking;
    }

    public function setSeeking($seeking)
    {
        $this->seeking = $seeking;
    }
    public function getBio($bio)
    {
        return $bio;
    }

    public function setBio($bio)
    {
        $this->bio = $bio;
    }
}