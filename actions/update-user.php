<?php

include "../classes/User.php";

$user = new User;
$user->updateUser($_POST['user_id'], $_POST['first_name'],$_POST['last_name'],$_POST['username']);


