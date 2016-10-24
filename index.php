<?php

session_start();

define('ERROR_MESSAGE', "Credenciales Incorrectas");
$error = false;

if (isset($_SESSION['username'])) {
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        include 'formlogin.php';
    } else {
        include 'private.php';
    }
} else {
    if (empty($_POST)) {
        include 'formlogin.php';
    } elseif (isset($_POST['login'])) {
        if ($_POST['user'] === 'ivan' && $_POST['pass'] === 'ivan') {
            $_SESSION['username'] = $_POST['user'];
            include 'private.php';
        } else {
            $error = true;
            include 'formlogin.php';
        }
    }
}