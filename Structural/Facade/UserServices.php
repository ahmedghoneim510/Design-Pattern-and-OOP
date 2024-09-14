<?php

namespace Structural\Facade;

class UserServices
{
    public function createUser($username)
    {
        echo "User created with username: $username <br>";
    }
    public function deleteUser($username)
    {
        echo "User deleted with username: $username <br>";
    }
}