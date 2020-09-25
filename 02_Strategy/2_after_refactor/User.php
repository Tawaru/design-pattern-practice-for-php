<?php

require_once 'RoleBehavior.php';

class User
{
    private $role;

    public function __construct(){
        $this->role = new Customer();
    }

    public function getMyTask()
    {
        return $this->role->getTask();
    }

    public function setRole($role)
    {
        $this->role = $role;
    }
}
