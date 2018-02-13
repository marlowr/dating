<?php
/**
 * Created by PhpStorm.
 * User: mrrya
 * Date: 2/13/2018
 * Time: 12:16 PM
 */

class PremiumMember extends Member {
    private $_inDoorInterests;
    private $_outDoorInterests;

    public function setIndoorInterests($inDoorInterests) {
        $this->_inDoorInterests = $inDoorInterests;
    }

    public function getIndoorInterests(){
        return $this->_inDoorInterests;
    }

    public function setOutDoorInterests($outDoorInterests) {
        $this->_inDoorInterests = $outDoorInterests;
    }

    public function getOutDoorInterests() {
        return $this->_outDoorInterests;
    }
}