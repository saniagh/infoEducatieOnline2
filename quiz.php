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
    <link rel="stylesheet" href="src/style/test_style.css">

    <title>Test1 - TimeMachine</title>

    <script src="js/jquery-2.1.4.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
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

    $(document).ready(function () {
        $("#start_test").click(function () {

            $(".paper").animate({top: '-100%'});
            $(".paper").animate({top: '-100%'}, 1000);
            $(".paper2").animate({top: '0%'}, 2000);
        });
    });
    var cc = 0;
    var clicked = 0;

    function addCoins() {
        cc = 0;

        if (document.getElementById('answer_1').checked) {

            $("#q1").css({'color': 'green'});
            cc = cc + 2;
        } else {
            $("#q1").css({'color': 'red'})
        }

        if (document.getElementById('answer_2').checked) {

            $("#q2").css({'color': 'green'});
            cc = cc + 2;
        } else {
            $("#q2").css({'color': 'red'})
        }

        if (document.getElementById('answer_3').checked) {

            $("#q3").css({'color': 'green'});
            cc = cc + 2;
        } else {
            $("#q3").css({'color': 'red'})
        }

        if (document.getElementById('answer_4').checked) {

            $("#q4").css({'color': 'green'});
            cc = cc + 2;
        } else {
            $("#q4").css({'color': 'red'})
        }

        if (document.getElementById('answer_5').checked) {

            $("#q5").css({'color': 'green'});
            cc = cc + 2;
        } else {
            $("#q5").css({'color': 'red'})
        }

        if (cc == 10){
            $("#finished").css({'color':'green'})
        }

        console.log(cc);

        if(cc==10 && clicked == 0)
        {var coin_count = cc;
            clicked++
        }
        else coin_count = 0;
        $.post("ajax/addCoins.php", {
                coin_count: coin_count,
            }, function (data, status) {
                readCoins();
            }
        );
    }

    function readCoins() {
        $.get("ajax/readCoins.php", {}, function (result, status) {
            $(".records_content").html(result);
        });
    }

    $(document).ready(function () {
        readCoins();
    });
</script>


<div class="content">
    <div class="paper">

        <div class="test">
            <div class="before_test"> Ești pregătit să îți testezi cunoștințele?</div>
            <div class="start_button" id="start_test" style="margin-top:20%; margin-left:15%;"><a> Încep testul!</a>
            </div>
            <a href="lessons.php">
                <div class="start_button" style="margin-top:-16%; margin-left:65%;">Mă întorc la studiat!
            </a></div>

    </div>
</div>

<div class="paper2">
    <div class="test" id="quiz">
        <form>
            <div class="quiz" id="q1">
                <div class="quiz_text">Al Doilea Război Mondial a avut loc între anii:</div>
                <input type="radio" name="selector_1" id="answer_1"> <label>1939 şi 1945</label>
                <input type="radio" name="selector_1"> <label>1914 şi 1918</label>
                <input type="radio" name="selector_1"> <label>1941 şi 1944</label>
                <input type="radio" name="selector_1"> <label for="t-option">1942 și 1951</label>
            </div>

            <div class="quiz" id="q2">
                <div class="quiz_text">Planul pentru  scoaterea Franţei din război a purtat, în strategia germană, numele de cod:</div>
                <input type="radio" name="selector_2"> <label>Planul Alb</label>
                <input type="radio" name="selector_2" id="answer_2"> <label>Planul Galben</label>
                <input type="radio" name="selector_2"> <label>Planul Leul de Mare</label>
                <input type="radio" name="selector_2"> <label>Planul Negru</label>
            </div>

            <div class="quiz" id="q3">
                <div class="quiz_text">Documentul, în opt puncte, care a stat la baza constituirii ONU a fost:</div>
                <input type="radio" name="selector_3" id="answer_3"> <label>Carta Atlanticului</label>
                <input type="radio" name="selector_3"> <label>Declaraţia de la Potsdam</label>
                <input type="radio" name="selector_3"> <label>Declaraţia Naţiunilor Unite</label>
                <input type="radio" name="selector_3"> <label for="t-option">Declaratia de la Roma</label>
            </div>

            <div class="quiz" id="q4">
                <div class="quiz_text">Statul care a folosit bomba atomică, în al Doilea Război Mondial, împotriva Japoniei a fost:</div>
                <input type="radio" name="selector_4" id="answer_4"> <label>SUA</label>
                <input type="radio" name="selector_4"> <label>URSS</label>
                <input type="radio" name="selector_4"> <label>Germania</label>
                <input type="radio" name="selector_4"> <label>Anglia</label>
            </div>

            <div class="quiz" id="q5">
                <div class="quiz_text">Noaptea de Cristal a avut loc în</div>
                <input type="radio" name="selector_5"> <label>19 februarie 1937</label>
                <input type="radio" name="selector_5"> <label>9 noiembrie 1940</label>
                <input type="radio" name="selector_5" id="answer_5"> <label>9 noiembrie 1938</label>
                <input type="radio" name="selector_5"> <label>19 februarie 1938</label>
            </div>

            <div id="finished" style="color:red; font-family:IndieFlower,'sans-serif'; font-size:2em; cursor:pointer;margin-left:60%;" onclick="addCoins()">
                Am terminat!
            </div>
        </form>
    </div>
</div>
<div style="display: flex; justify-content: flex-end">
    <div style="display: flex; justify-content: flex-end;padding: 5px 15px 5px 15px;margin:5px;background-color: white;opacity: 0.7">
        <div style="font-size: 24px;padding: 5px">In acest moment, dai <a href="quiz.php">Testul 1</a>. Mai ai testele: <a
                href="quiz2.php">Testul 2</a> si <a href="quiz3.php">Testul 3</a></div>
        <div style="font-size: 24px;padding: 5px 5px 5px 20px">Ai strans:</div>

<div class="records_content" style="padding: 5px;font-size: 24px;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;"></div> <!-- here we show coins -->
        <img src="coin.svg" alt="error" width="24px" height="24px" style="padding: 5px">
    </div>
</div>

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
</body>
</html>