<?php

class Computer {

    private $status;

    /**
     * コンストラクタにて、初期状態は「オンライン」とする
     *
     */
    public function __construct()
    {
        $this->status = "It's online now!";
    }

    public function changeState($state)
    {
        switch ($state) {
            case "Online":
                $this->status = "It's online now!";
                break;

            case "Shutdown":
                $this->status = "It's shutdown now!";
                break;
        }
    }

    public function getStatus()
    {
        return $this->status;
    }
}
