<?php
session_start();

require_once 'connect.php';

$id=$_POST['admindelete_id'];

mysqli_query($link, "DELETE FROM `users` WHERE `users`.`id_user` = $id");
$_SESSION['message4'] = 'Редактор успешно удален!';
header('Location: ../admin.php');
?>