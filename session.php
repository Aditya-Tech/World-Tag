<?php
    
    $link = mysqli_connect("79.170.40.178", "cl18-users-0sd", "4-xB7MdFy", "cl18-users-0sd");

    if (mysqli_connect_error()) {
        die ("There was an error connecting to the database.");
    }

    $username = mysqli_real_escape_string($link, $_POST['username']);

    $query = mysql_query("SELECT * FROM users WHERE username = 'aparuch0'");
    $row = mysql_fetch_array($query);

    print_r($row);
    echo "The email for user $username is " . $row[1];

    $userLat = $_POST['lat'];
    $userLong = $_POST['lng'];
    $points = mysql_query("SELECT 'points' FROM users WHERE 'username' = $user");
        
    $query = "UPDATE `users` SET latitude = $userLat, longitude = $userLong WHERE id = 1324123 LIMIT 1"; 
    
    mysqli_query($link, $query);
?>