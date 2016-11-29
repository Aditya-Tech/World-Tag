<?php

    



    $link = mysqli_connect("79.170.40.178", "cl18-users-0sd", "4-xB7MdFy", "cl18-users-0sd");

    
    if (mysqli_connect_error()) {
        die ("There was an error connecting to the database.");
    }
/*
    //mysqli_query($link, $query);
    
    // LIKE '%gmail.com' if ends with gmail.com,
    // LIKE '%p%' if p is in email
    $query = "SELECT * FROM users WHERE email LIKE '%gmail.com'";
    
    if ($result = mysqli_query($link, $query)) {
        while ($row = mysqli_fetch_array($result)) {
            print_r($row);
        }
    }
    */

/* using escape characters
$name = "Rob O'Grady";

$query = "SELECT `email` FROM users WHERE name = '".mysqli_real_escape_string($link, $name)."'";

*/ 

/* updating a user's email, LIMIT 1 limits only one update as protection from losing data
    $query = "UPDATE `users` SET email = 'adityasparuchuri@gmail.com' WHERE id = 1324123 LIMIT 1";
    
mysqli_query($link, $query);
    
    // retrieving data from sql table
    $query = "SELECT * FROM users";

    if ($result = mysqli_query($link, $query)) {
        $row = mysqli_fetch_array($result);
        echo "Your email is ".$row['email']." and your password is ".$row['password'];
    }

    
    // inserting data into sql table
    $query = "INSERT INTO `users` (`email`, `password`) VALUES('sree.paruchuri@yahoo.com', 'secondPassword')";

    
    
*/
    
        
        
?>


<form method = "post">

    <input name="email" type="text" placeholder="Email address">
    
    <input name="password" type="password" placeholder="Password">
    
    <input type="submit" value="sign up">


</form> 