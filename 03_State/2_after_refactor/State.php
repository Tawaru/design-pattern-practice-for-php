<?php

interface StateInterface
{
    public function nextState();
    public function getStatus();
}

class OnlineState  implements StateInterface
{
    private static $instance = null;

    /**
     * 1つの状態を表すオブジェクトは複数不要のため、
     * コンストラクタはprivateとし、Singletonパターンを用いる
     */
    private function __construct(){}

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new OnlineState ();
        }

        return self::$instance;
    }

    public function nextState()
    {
        return ShutdownState::getInstance();
    }

    public function getStatus()
    {
        return "It's online now!";
    }
}

class ShutdownState  implements StateInterface
{
    private static $instance = null;

    /**
     * 1つの状態を表すオブジェクトは複数不要のため、
     * コンストラクタはprivateとし、Singletonパターンを用いる
     */
    private function __construct(){}

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new ShutdownState ();
        }

        return self::$instance;
    }

    public function nextState()
    {
        return OnlineState::getInstance();
    }

    public function getStatus()
    {
        return "It's shutdown now!";
    }
}