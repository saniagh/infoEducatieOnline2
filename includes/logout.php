<?php

include_once 'functions.php';
sec_session_start();

$_SESSION = array();

file_put_contents('session.php', ' ');

$params = session_get_cookie_params();

setcookie(session_name(),'', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);

session_destroy();
header("Location: ../index.php");
exit();