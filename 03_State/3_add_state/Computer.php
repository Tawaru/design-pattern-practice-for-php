<?php

require_once 'State.php';

class Computer {

    private $state;

    /**
     * コンストラクタにて、初期状態は「オンライン」とする
     *
     */
    public function __construct()
    {
        $this->state = OnlineState::getInstance();
    }

    public function changeState()
    {
        $this->state = $this->state->nextState();
    }

    public function getStatus()
    {
        return $this->state->getStatus();
    }
}
