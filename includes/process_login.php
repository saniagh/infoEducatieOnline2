<?php

include_once 'db_connect.php';
include_once 'functions.php';

sec_session_start();

//process our login credentials
// we use email and password to login, not username and password

if (isset($_POST['email'], $_POST['p'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['p'];

    if (login($email, $password, $mysqli) == true) {
        header("Location: ../summary.php");
        exit();
    } else {
        header('Location: ../login.php?error=1');
        exit();
    }
} else {
    header('Location: ../error.php?err=Logarea nu a putut fi procesata');
    exit();
}