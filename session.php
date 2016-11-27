<?php
    
    $link = mysqli_connect("79.170.40.178", "cl18-users-0sd", "4-xB7MdFy", "cl18-users-0sd");

    if (mysqli_connect_error()) {
        die ("There was an error connecting to the database.");
    }
    $userLat = $_POST['lat'];
    $userLong = $_POST['lng'];

    echo $userLong;
        
    $query = "UPDATE `users` SET latitude = $userLat, longitude = $userLong WHERE id = 1324123 LIMIT 1"; 
    
    mysqli_query($link, $query);
?>