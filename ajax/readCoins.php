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

	$query = "SELECT coin_count,status_test_1 FROM members WHERE id='$id'";

	if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error($db));
    }

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $data .= '<tr>
				<td>'.$row['coin_count'].'</td> 
    		</tr>';
        if ($row['status_test_1'] == 1){
            $_POST['status_test_1']= 1;
        }
    }
}

    echo $data;