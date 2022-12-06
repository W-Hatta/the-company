<?php

include "../classes/User.php";
session_start();

$filename= $_FILES['photo']['name'];     //original file name(duck.jpg)
$tmp_name= $_FILES['photo']['tmp_name']; //temporary location of uploaded file

$user = new User; 
$user->uploadPhoto($_SESSION['user_id'], $filename, $tmp_name);

