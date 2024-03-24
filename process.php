<?php
session_start();
include 'functions.php';

$username = $_POST['login'];
$password = $_POST['password'];
$dateBirthday = $_POST['datebirthday'];

if ($username !== '' && $password !== '' && $dateBirthday !== '') {

$_SESSION['checkDateOfBirthday'] = getDateBirthday($dateBirthday);

    if (checkPassword($username, $password)) {
        $_SESSION['authorized'] = true;
        $_SESSION['currentUser'] = $username;
        header('Location: index.php');
    } else {
        $_SESSION['message'] = 'Неправильно введены логин или пароль. Повторите попытку ввода данных.';
        header('Location: login.php');
    }
}
else {
    $_SESSION['message'] = 'Не введены логин, пароль или дата рождения. Повторите попытку ввода данных.';
    header('Location: login.php');
}
