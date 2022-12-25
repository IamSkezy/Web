<?php

$host = 'localhost';
$user = 'u1881631_default';
$password = '73fqJ3qSupYY5p77';
$db_name = 'u1881631_default';

$link = mysqli_connect($host, $user, $password, $db_name);
if($link->connect_errno){
    exit('Error with data base!');
}

$link->set_charset('utf8');

?>