<?php
//brought in created variables from database.php to this file
    require_once('../model/database.php');      //checks if it was used in memory

    $connection = new mysqli($host, $username, $password);   //creating the object mysqli that is used to connect to the database
    
    if($connection->connect_error){     //checks if there was a connection error
        die("Error: ".$connection->connect_error);
    }
    else {
        echo "Success.".$connection->host_info;
    }
    
    $connection->close();