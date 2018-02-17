<?php
/**
 * The Member class is used to store information about members signing up for the dating website Forest.
 * Used by the PremiumMember class.
 *
 * @author Ryan Marlow <rmarlow@mail.greenriver.edu>
 * @package classes
 */

/**
 * Class Member is used to store the information about members signing up for the dating website Forest.
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

    /**
     * Member constructor takes the input variables and assigns them to the member object variables.
     * @param $fname
     * @param $lname
     * @param $age
     * @param $gender
     * @param $phone
     */
    public function __construct($fname,$lname,$age,$gender,$phone) {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->gender = $gender;
        $this->phone = $phone;
    }

    /**
     * getFname returns the first name of the member.
     * @return fname
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * setFname assigns the first name of the member.
     * @param $fname
     */
    public function setFname($fname)
    {
        $this->$fname = $fname;
    }

    /**
     * getLname returns the last name of the member.
     * @return lname
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * setLname assigns the last name of the member.
     * @param $lname
     */
    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    /**
     * getGender returns the gender of the member.
     * @return gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * setGender assigns the gender of the member.
     * @param $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * getPhone returns the phone number of the member.
     * @return phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * setPhone assigns the phone number of the member.
     * @param $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * getAge returns the age of the member.
     * @return age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * setPhone assigns the age number of the member.
     * @param $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * getEmail returns the email of the member.
     * @return email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * setEmail assigns the email of the member.
     * @param $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * getState returns the state of the member.
     * @return state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * setState assigns the state of the member.
     * @param $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * getSeeking returns the desired partner's gender of the member.
     * @return seeking
     */
    public function getSeeking()
    {
        return $this->seeking;
    }

    /**
     * setSeeking assigns the desired partner's gender of the member.
     * @param $seeking
     */
    public function setSeeking($seeking)
    {
        $this->seeking = $seeking;
    }

    /**
     * getBio returns the bio of the member.
     * @return bio
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * setBio assigns the bio of the member.
     * @param $bio
     */
    public function setBio($bio)
    {
        $this->bio = $bio;
    }
}