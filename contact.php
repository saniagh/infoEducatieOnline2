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
    <link rel="stylesheet" href="src/style/contact.css">

    <title>Contact - Time Machine</title>

    <script src="js/jquery-2.1.4.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/main.js"></script>

    <link rel="stylesheet" type="text/css" href="src/style/main.css">
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>
</head>
<body>
<div class="back"></div>
<?php if (login_check($mysqli) == false) : ?>
    <div id="mySidenav" class="sidenav" style="z-index: 4">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Acasa</a>
        <a href="login.php">Logare</a>
        <a href="register.php">Inregistrare</a>
        <a href="contact.php">Contact</a>
    </div>
    <span
        style="font-size:3em;cursor:pointer; position:absolute; top:2%; left:3%;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;z-index: 3; color:white;"
        onclick="openNav()">&#9776;
    </span>
<?php else : ?>
    <div id="mySidenav" class="sidenav" style="z-index: 4">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="contact.php">Contact</a>
        <a href="lessons.php">Studiaza!</a>
        <a href="quiz.php">Testeaza-te!</a>
        <a href="travel.php">Calatoreste!</a>
        <a href="includes/logout.php">Logout</a>
    </div>
    <span
        style="font-size:3em;cursor:pointer; position:absolute; top:2%; left:3%;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;z-index: 3; color:white;"
        onclick="openNav()">&#9776;
    </span>
<?php endif; ?>
<div class="envelope new">
    <div class="front">
        <div class="stamp"></div>
        <div class="mailme">
        </div>
    </div>
    <div class="back">
        <div class="letter">
            <form class="mailform">
                <div>
                    <label for="name">Nume</label>
                    <input type="text" name="name" id="name" size="40" placeholder="Nume">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" size="40" placeholder="Email">
                </div>
                <div>
                    <label for="description">Mesaj</label>
                    <textarea name="description" id="description" cols="40" rows="5" placeholder="Mesaj"></textarea>
                </div>
                <div>
                    <input type="submit" onclick="addFeedback()" value="Trimite">
                </div>
            </form>
        </div>
        <div class="flap left-flap"></div>
        <div class="flap right-flap"></div>
        <div class="flap bottom-flap"></div>
        <div class="flap top-flap"></div>
    </div>
</div>
<div class="notification">
    <div>
        <div>
            <p>Mesaj Trimis!</p>
            <p>Scrie un mesaj nou</p>
        </div>
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
        document.getElementById("main").style.marginLeft = "0";
        document.body.style.backgroundColor = "white";
    }

    $(function () {

        if (!$('.envelope').hasClass('open')) {
            $('.envelope').click(function () {
                $(this).removeClass('new').addClass('open');
            });
        }

        $('.mailform input, .mailform textarea').on('keyup', function () {
            if (this.value !== '') {
                $(this).prev('label').addClass('show');
            } else {
                $(this).prev('label').removeClass('show');
            }
        }).on("focus", function () {
            $(this).prev("label").addClass('focus');
        }).on("blur", function () {
            $(this).prev("label").removeClass('focus');
        });

        $('.notification').find('p').last().click(function () {
            $(this).closest('.notification').prev('.envelope').removeClass('send').addClass('new');
            $(this).closest('.notification').prev('.envelope').find('.mailform')[0].reset();
            $(this).closest('.notification').prev('.envelope').find('label').removeClass('show');
        });

        $('.mailform').submit(function (event) {
            event.preventDefault();

            $(this).closest('.envelope').removeClass('open').addClass('send');

            //Put jQuery code for submitting the form with AJAX here.
        });
    });
    function addFeedback() {
        var name = $("#name").val();
        var email = $("#email").val();
        var description = $("#description").val();
        $.post("ajax/addFeedback.php", {
            name: name,
            email: email,
            description: description
        }, function (data, status) {
            $("#name").val("");
            $("#email").val("");
            $("#description").val("");
        });
    }
</script>
</body>
</html>