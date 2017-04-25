<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Acasa - Time Machine</title>
    <link rel="stylesheet" href="src/style/main.css">
</head>
<?php if (login_check($mysqli) == false) : ?>
    <body>
    <div class="image">
        <img src="TimeMachine.gif" width="100%" height="100%">
    </div>
    <div class="audio" style="display:none;">
        <audio controls autoplay loop>
            <source src="Futuristic Computer Sound Effects.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Acasa</a>
        <a href="login.php">Logare</a>
        <a href="register.php">Inregistrare</a>
        <a href="contact.php">Contact</a>
    </div>
    <a href="login.php">
        <div
            style="width:16%; height:170px;top:32%;left:43%;position:absolute;opacity:0.5; z-index:1; cursor:pointer;"></div>
    </a>
    <span
        style="font-size:3em;cursor:pointer; position:absolute; top:2%; left:3%;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;color: white"
        onclick="openNav()">&#9776;
    </span>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }
    </script>
    </body>
<?php else : ?>
    <?php
    header('Location: summary.php');
    ?>
<?php endif; ?>
</html>