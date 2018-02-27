<?php
/**
 * This class is the child for the member class and holds necessary information for the
 * premium member objects.
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