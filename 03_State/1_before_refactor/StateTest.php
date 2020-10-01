<?php

require_once 'Computer.php';

use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testComputerStatus()
    {
        $pc = new Computer();

        $this->assertEquals("It's online now!", $pc->getStatus());

        $pc->changeState("Shutdown");

        $this->assertEquals("It's shutdown now!", $pc->getStatus());

        $pc->changeState("Online");

        $this->assertEquals("It's online now!", $pc->getStatus());

        $pc->changeState("Shutdown");

        $this->assertEquals("It's shutdown now!", $pc->getStatus());
    }

}
