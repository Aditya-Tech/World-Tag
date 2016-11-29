<?php
    $link = mysqli_connect("79.170.40.178", "cl18-users-0sd", "4-xB7MdFy", "cl18-users-0sd");

    if (mysqli_connect_error()) {
        die ("There was an error connecting to the database.");
    }


    $first_name = mysqli_real_escape_string($link, $_POST['firstname']);
    $last_name = mysqli_real_escape_string($link, $_POST['lastname']);
    $email_address = mysqli_real_escape_string($link, $_POST['email']);
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    $query = "INSERT INTO users (firstName, lastName, email, username, password, points) VALUES ('$first_name', '$last_name', '$email_address', '$username', '$password', 50)";

    mysqli_query($link, $query);

?>

