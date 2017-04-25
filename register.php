<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';

sec_session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register - Time Machine</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="src/style/main.css">
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>
</head>
<body style="background-color: white">
<?php
if (!empty($error_msg)) {
    echo $error_msg;
}
?>
<?php if (login_check($mysqli) == true) : ?>
    <?php
    header('Location: summary.php');
    ?>
<?php else : ?>
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
            <p style="font-family: 'Roboto Light','sans-serif';font-size: 1em">Inregistrare</p>
            <div class="form">
                <form class="login-form" method="post" name="registration_form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
                    <input type="text" placeholder="Nume de utilizator"  name='username' id='username' required/>
                    <input type="password" name="password" id="password" placeholder="Parola" required/>
                    <input type="password" name="confirmpwd" id="confirmpwd" placeholder="Confirma parola" required/>
                    <input type="text" name="email" id="email" placeholder="Email" required/>
                    <input class="button" type="submit"
                           value="Inregistrare"
                           onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);"/>
                    <p class="message">Aveti deja cont? <a href="login.php">Logati-va</a></p>
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