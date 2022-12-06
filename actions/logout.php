<?php

//destroy session

session_start();
session_unset();
session_destroy();

//redirect
header("location: ../views");
exit;
