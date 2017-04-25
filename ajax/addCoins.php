<?php
        include_once '../includes/db_connect.php';
        include_once '../includes/functions.php';
        include_once './readCoins.php';

        sec_session_start();

        $host = "localhost";
        $user = "root";
        $password = "con15021999";
        $database = "dual_pc_db";

        $db = mysqli_connect($host, $user, $password) or die("Could not connect to database");

        mysqli_select_db($db, $database);

        $coin_count = $_POST['coin_count'];
        $id = $_SESSION['user_id'];

        if($_POST['status_test_1']==0 && $coin_count==10) {

            $query = "UPDATE members SET coin_count=coin_count+" . $coin_count . ", status_test_1=1, ressource_1=1 WHERE id=" . $id . ";";

            if (!$result = mysqli_query($db, $query)) {
                exit(mysqli_error($db));
            }
            echo "1 Record Added!";
        }
?>