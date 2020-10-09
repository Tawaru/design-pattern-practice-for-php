<?php

require_once 'WashingMachine.php';

use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testWashingMachineAutoMode()
    {
        $washingMachine = new WashingMachineFacade();
        $this->assertEquals("おまかせ洗いは洗い10分、すすぎ15分、脱水5分で実行しました。", $washingMachine->automaticWashing());
    }

    public function testWashingMachineSpeedMode()
    {
        $washingMachine = new WashingMachineFacade();
        $this->assertEquals("お急ぎ洗いは洗い5分、すすぎ5分、脱水5分で実行しました。", $washingMachine->speedWashing());
    }
}
