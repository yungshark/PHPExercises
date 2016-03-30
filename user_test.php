<?php

require __DIR__ . '/library/Model.php';
require __DIR__ . '/library/User.php';

$user = new User();

$user->id = '10';
$user->username = 'yungshark';
$user->password = 'wildcats';
$user->email 	= 'myemail@gmail.com';
$user->save();

var_dump($user);