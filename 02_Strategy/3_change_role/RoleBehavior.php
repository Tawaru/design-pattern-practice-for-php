<?php

interface RoleBehavior
{
    public function getTask();
}

class Customer implements RoleBehavior
{
    public function getTask()
    {
       return "レビュー送信";
    }
}

class Admin implements RoleBehavior
{
    public function getTask()
    {
       return "会議準備、顧客連絡、レポート作成、請求取りまとめ";
    }
}

class Newcomer implements RoleBehavior
{
    public function getTask()
    {
       return "ユーザー登録";
    }
}

class Programmer implements RoleBehavior
{
    public function getTask()
    {
       return "設計、開発、テスト";
    }
}
