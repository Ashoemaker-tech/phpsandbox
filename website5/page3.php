<?php
$user = ['name' => 'Andrew', 'email' => 'test@test.com', 'age' => 31];

// set cookie will not take an array so we have to prepare data to be stored
$user = serialize($user);

setcookie('user', $user, time() + (8640 * 30));

$user = unserialize($_COOKIE['user']);

echo $user['name'] . '<br>';
print_r($user);
