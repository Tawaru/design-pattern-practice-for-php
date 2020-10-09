<?php

/**
 * 洗濯クラス
 */
class Wash {

    private $washingTime = 0;
    private $howToWash = "標準";

    public function __construct(){}

    public function setWashingTime(String $time){
        $this->washingTime = $time;
    }

    public function setHowToWash(String $howToWash){
        $this->howToWash = $howToWash;
    }

    public function startWashing(){
        return $this->howToWash . "モードで".$this->washingTime."分間洗います。";
    }

}

/**
 * すすぎクラス
 */
class Rinse {

    private $rinseTime = 0;
    private $howToRinse = "標準";

    public function __construct(){}

    public function setRinseTime(String $time){
        $this->rinseTime = $time;
    }

    public function setHowToRinse(String $howToRinse){
        $this->howToRinse = $howToRinse;
    }

    public function startRinse(){
        return $this->howToRinse . "モードで".$this->rinseTime."分間すすぎます。";
    }

}

/**
 * 脱水クラス
 */
class Dry {

    private $dryTime = 0;
    private $howToDry = "標準";

    public function __construct(){}

    public function setDryTime(String $time){
        $this->dryTime = $time;
    }

    public function setHowToDry(String $howToDry){
        $this->howToDry = $howToDry;
    }

    public function startDry(){
        return $this->howToDry . "モードで".$this->dryTime."分間脱水します。";
    }

}
