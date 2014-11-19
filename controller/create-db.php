<?php
//brought in created variables from database.php to this file
    require_once('../model/database.php');      //checks if it was used in memory

    $connection = new mysqli($host, $username, $password);   //creating the object mysqli that is used to connect to the database
    