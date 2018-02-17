<?php
/**
 * The PremiumMember class is used to store additional information on
 * premium members signing up for the dating website Forest.
 *
 * @author Ryan Marlow <rmarlow@mail.greenriver.edu>
 * @package classes
 */

/**
 * Class PremiumMember is used to store additional information about
 * members signing up for the dating website Forest.
 */
class PremiumMember extends Member {
    private $_interests;

    /**
     * PremiumMember constructor assigns the first name, last name, age, gender and phone of the
     * Premium member, uses the parent class Member constructor.
     * @param $fname
     * @param $lname
     * @param $age
     * @param $gender
     * @param $phone
     */
    public function __construct($fname,$lname,$age,$gender,$phone)
    {
        parent::__construct($fname,$lname,$age,$gender,$phone);
    }

    /**
     * setInterests assigns the PremiumMember's interests to the object.
     * @param $interests
     */
    public function setInterests($interests) {
        $this->_interests = $interests;
    }

    /**
     * getInterests returns the PremiumMember's interests.
     * @return mixed
     */
    public function getInterests(){
        return $this->_interests;
    }
}