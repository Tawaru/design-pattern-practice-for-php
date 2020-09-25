<?php

class User
{
    private $role;

    public function __construct($role){
        $this->role = $role;
    }

    public function getMyTask()
    {
        if ($this->role === "Customer")
        {
            return "レビュー送信";
        } elseif ($this->role === "Admin")
        {
            return "会議準備、顧客連絡、レポート作成、請求取りまとめ";
        } elseif ($this->role === "Newcomer")
        {
            return "ユーザー登録";
        }
    }

}
