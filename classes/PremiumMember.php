<?php
/**
 * Created by PhpStorm.
 * User: mrrya
 * Date: 2/13/2018
 * Time: 12:16 PM
 */

class PremiumMember extends Member {
    protected $_interests;
    protected $_interestsIn;
    protected $_interestsOut;
    protected $_image;

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

    public function setInterestsIn($interestsIn) {
    $this->_interestsIn = $interestsIn;
    }

    public function getInterestsIn(){
        return $this->_interestsIn;
    }
    public function setInterestsOut($interestsOut) {
        $this->_interestsIn = $interestsOut;
    }

    public function getInterestsOut(){
        return $this->_interestsOut;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getImage() {
        return $this->image;
    }
}