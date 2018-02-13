<?php
/**
 * Created by PhpStorm.
 * User: mrrya
 * Date: 2/13/2018
 * Time: 12:16 PM
 */

class PremiumMember extends Member {
    private $_interests;

    public function __construct($fname,$lname,$age,$gender,$phone)
    {
        parent::__construct($fname,$lname,$age,$gender,$phone);
    }

    public function setInterests($interests) {
        $this->_interests = $interests;
    }

    public function getInterests(){
        return $this->_interests;
    }
}