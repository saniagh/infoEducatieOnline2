<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Te-ai inregistrat cu success!</title>
    <link rel="stylesheet" type="text/css" href="src/style/main.css">
</head>
<?php if (login_check($mysqli) == true) : ?>
<?php
header('Location: summary.php');
die();
?>
<?php else : ?>
<body style="background-color: white">
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">Acasa</a>
    <a href="login.php">Logare</a>
    <a href="register.php">Inregistrare</a>
    <a href="contact.php">Contact</a>
</div>
<span
    style="font-size:3em;cursor:pointer; position:absolute; top:2%; left:3%;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;"
    onclick="openNav()">&#9776;
    </span>
<div class="content">
    <div class="login_div">
        <p style="font-family: 'Roboto','sans-serif';font-size: 1em">Te-ai inregistrat cu succes</p>
        <p style="font-family: 'Roboto','sans-serif';font-size: 1em">Pentru a continua, te rugam sa te loghezi<a
                href="login.php"> aici</a>.</p>

    </div>
</div>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
    }
</script>
</body>
<?php endif; ?>
</html>