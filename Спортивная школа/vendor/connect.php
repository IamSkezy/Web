<!-- Файл для подключения к БД -->
<?php
// Подготовка данных
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'sportfitness';
// Подключение
$link = mysqli_connect($host, $user, $password, $db_name);
if($link->connect_errno){
    exit('Error with data base!');
}
// Кодировка
$link->set_charset('utf8');

?>
