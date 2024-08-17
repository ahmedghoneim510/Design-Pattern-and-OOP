<?php

namespace Structural\Adapter\Auth\Adapter;
require_once __DIR__ . '/../../../vendor/autoload.php';

use Structural\Adapter\Auth\UserLogin;


// Create an instance of TokenAuthAdapter
$tokenAuthAdapter = new TokenAuthAdapter();

// Create an instance of UserLogin with the TokenAuthAdapter
$userLogin = new UserLogin($tokenAuthAdapter);

// Perform a login
echo $userLogin->login(['token'=>'token']); // Outputs: Key: token

echo "<br>";
$usertoken = new BasicAuthAdapter();

$user=new UserLogin($usertoken);

echo $user->login(['username'=>'username','password'=>'password']);// Outputs: Key: username, password
