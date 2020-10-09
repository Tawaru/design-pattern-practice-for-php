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

}
