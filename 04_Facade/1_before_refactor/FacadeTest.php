<?php

require_once 'WashingMachine.php';

use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testWashingMachineAutoMode()
    {
        $wash = new Wash();
        $wash->setWashingTime(10);
        $wash->startWashing();
        $this->assertEquals("標準モードで10分間洗います。", $wash->startWashing());

        $rinse = new Rinse();
        $rinse->setRinseTime(15);
        $rinse->startRinse();
        $this->assertEquals("標準モードで15分間すすぎます。", $rinse->startRinse());

        $dry = new Dry();
        $dry->setDryTime(5);
        $dry->startDry();
        $this->assertEquals("標準モードで5分間脱水します。", $dry->startDry());
    }

}
