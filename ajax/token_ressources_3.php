<?php
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';

sec_session_start();

$host = "localhost";
$user = "root";
$password = "con15021999";
$database = "dual_pc_db";

$db = mysqli_connect($host, $user, $password) or die("Could not connect to database");

mysqli_select_db($db, $database);

$id = $_SESSION['user_id'];

$query = "SELECT ressource_1,ressource_2,ressource_3 FROM members WHERE id='$id'";

if (!$result = mysqli_query($db,$query)) {
    exit(mysqli_error($db));
}

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        if ($row['ressource_3'] == 1){
            $data .= '<img src="../ticket.png" class="ticket"><a  href="../video3.html" class="text_31" target="_blank">Al Doilea Război Mondial - Debarcarea în Normandia</a>';
        }
    }
}

echo $data;