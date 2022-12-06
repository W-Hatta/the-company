<?php

include "../classes/User.php";

$enc_password = password_hash($_POST['password'],PASSWORD_DEFAULT);

$user = new User;
$user->createUser($_POST['first_name'],$_POST['last_name'],$_POST['username'],$enc_password);


