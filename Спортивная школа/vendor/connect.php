<!-- Файл для подключения к БД -->
<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'sportfitness';

$link = mysqli_connect($host, $user, $password, $db_name);
if($link->connect_errno){
    exit('Error with data base!');
}

$link->set_charset('utf8');

?>