<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['description']))
{
    $host = "localhost";
    $user = "root";
    $password = "con15021999";
    $database = "dual_pc_db";

    $db = mysqli_connect($host, $user, $password) or die("Could not connect to database");

    mysqli_select_db($db, $database);

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);

    $query = "INSERT INTO feedback(name, email, description) VALUES('$name', '$email', '$description')";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error($db));
    }
    echo "Feedback Added";
}
?>