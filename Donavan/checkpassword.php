<?php

include 'mySQLhelper.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$checkpwd = new mySQLHelper();
$checkpwd->checkPass($user, $pass);


?>