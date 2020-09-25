<?php

require_once 'User.php';

use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function testUserTask_01()
    {
        $user = new User("Customer");
        $this->assertEquals("レビュー送信", $user->getMyTask());
    }

    public function testUserTask_02()
    {
        $user = new User("Admin");
        $this->assertEquals("会議準備、顧客連絡、レポート作成、請求取りまとめ", $user->getMyTask());
    }

    public function testUserTask_03()
    {
        $user = new User("Newcomer");
        $this->assertEquals("ユーザー登録", $user->getMyTask());
    }

}
