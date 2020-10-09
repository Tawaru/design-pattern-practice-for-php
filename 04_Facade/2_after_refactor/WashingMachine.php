<?php

/**
 * 洗濯機ファサードクラス
 */
class WashingMachineFacade {

    public function __construct(){}

    /**
     * おまかせ洗い
     */
    public function automaticWashing()
    {
        $wash = new Wash();
        $wash->setWashingTime(10);
        $wash->setHowToWash("おまかせ");
        $wash->startWashing();

        $rinse = new Rinse();
        $rinse->setRinseTime(15);
        $rinse->setHowToRinse("おまかせ");
        $rinse->startRinse();

        $dry = new Dry();
        $dry->setDryTime(5);
        $dry->setHowToDry("おまかせ");
        $dry->startDry();
        return "おまかせ洗いは洗い10分、すすぎ15分、脱水5分で実行しました。";
    }
}

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
        echo $this->howToWash . "モードで".$this->washingTime."分間洗います。\n";
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
        echo $this->howToRinse . "モードで".$this->rinseTime."分間すすぎます。\n";
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
        echo $this->howToDry . "モードで".$this->dryTime."分間脱水します。\n";
    }

}
