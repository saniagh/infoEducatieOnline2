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
    <title>Calatoreste - TimeMachine</title>
    <link rel="stylesheet" href="src/style/travel.css" >
    <script src="js/jquery-2.1.4.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>

</div>
<?php if (login_check($mysqli) == true) : ?>
    <div class="back"></div>
    <div id="mySidenav" class="sidenav" style="z-index: 4">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="summary.php">Inapoi la Sumar</a>
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
<?php else : ?>
    <?php
    header('Location: login.php');
    ?>
<?php endif; ?>
<div class="image">
    <img src="back.png" width="100%" height="100%" style="z-index:-1;">
</div>
<div id="records_content1" class="content_1"><img src="ticket.png" class="ticket"><a href="quiz.php" class="text_11">Ai nevoie de 10 banuti ca sa poti vedea link-ul</a></div>
<div id="records_content2" class="content_2"><img src="ticket.png" class="ticket"><a href="quiz.php" class="text_11">Ai nevoie de 20 banuti ca sa poti vedea link-ul</a></div>
<div id="records_content3" class="content_3"><img src="ticket.png" class="ticket"><a href="quiz.php" class="text_31">Ai nevoie de 30 de banuti ca sa poti vedea link-ul</a></div>
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

    function readCoins() {
        $.get("ajax/token_ressources.php", {}, function (result, status) {
            if (result)
            $("#records_content1").html(result);
        });
        $.get("ajax/token_ressources_2.php", {}, function (result, status) {
            if (result)
                $("#records_content2").html(result);
        });
        $.get("ajax/token_ressources_3.php", {}, function (result, status) {
            if (result)
                $("#records_content3").html(result);
        });
    }

    $(document).ready(function () {
        readCoins();
    });

</script>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
</body>
</html>