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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - TimeMachine</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="src/style/main.css">
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>
</head>
<body style="background-color: white">
<?php if (login_check($mysqli) == true) : ?>
    <?php
    header('Location: summary.php');
    die();
    ?>
<?php else : ?>
    <?php
    if (isset($_GET['error'])) {
        echo '
                <div class="error">
                    <p>Email sau parola invalid</p>
                </div>
           ';
    }
    ?>
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
    <!-- Please do not modify id or name of the input fields. -->
    <div class="content">
        <div class="login_div">
            <p style="font-family: 'Roboto Light','sans-serif';font-size: 1em">Login</p>
            <div class="form">
                <form class="login-form" action="includes/process_login.php" method="post" name="login_form">
                    <input type="text" id="username" name="email"
                           placeholder="Email"/>
                    <input type="password" id="password" name="password"
                           placeholder="Parola"/>
                    <input class="button" type="submit" value="Logheaza-te" id="login-button"
                           onclick="formhash(this.form, this.form.password);"/>
                    <p class="message">Nu sunteti inregistrati? <a href="register.php">Creati-va un cont</a></p>
                </form>
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
            document.getElementById("main").style.marginLeft= "0";
            document.body.style.backgroundColor = "white";
        }
    </script>
<?php endif; ?>
</body>
</html>

