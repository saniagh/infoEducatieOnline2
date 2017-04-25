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
    <title>Sumar - Time Machine</title>
    <link rel="stylesheet" type="text/css" href="src/style/summary.css">
</head>
<?php if (login_check($mysqli) == true) : ?>
    <body>
    <div id="mySidenav" class="sidenav" style="z-index: 4">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="summary.php">Sumar</a>
        <a href="lessons.php">Studiaza!</a>
        <a href="quiz.php">Testeaza-te!</a>
        <a href="travel.php">Calatoreste!</a>
        <a href="contact.php">Contact</a>
        <a href="includes/logout.php">Logout</a>
    </div>
    <span
        style="font-size:3em;cursor:pointer; position:absolute; top:2%; left:3%;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;color: white"
        onclick="openNav()">&#9776;
    </span>
    <div class="image">
        <img src="back.png" width="100%" height="100%" style="z-index:-1;">
    </div>
    <div class="content_1"><img src="ticket.png" class="ticket"><a href="lessons.php" class="text_1">
            Studiaza!</a></div>
    <div class="content_2"><img src="ticket.png" class="ticket"><a href="quiz.php" class="text_2"> Testeaza-te!</a>
    </div>
    <div class="content_3"><img src="ticket.png" class="ticket"><a href="travel.php" class="text_3">
            Calatoreste!</a></div>


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
    header('Location: login.php');
    ?>
<?php endif; ?>
</html>