<?php
$email = $_POST['email'];
$password = $_POST['password'];

$password = password_hash($password, PASSWORD_DEFAULT);

$fp = fopen("data.txt", "a");
fwrite($fp, "$email:$password\n");
fclose($fp);
