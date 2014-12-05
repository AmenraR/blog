<?php
//brought in created variables from database.php to this file
    require_once(__DIR__ . '/../model/database.php');      //checks if it was used in memory

    $connection = new mysqli($host, $username, $password);   //creating the object mysqli that is used to connect to the database
    
    if($connection->connect_error){     //checks if there was a connection error
        die("Error: ".$connection->connect_error);
    }
    
    $exists = $connection->select_db($database);    //checks if the database exists
    
    if(!$exists){    //the if statement checks if the database is not found
        $query = $connection->query("CREATE DATABASE $database");    //send questions to create database
        
        if($query){
            echo '<p>Successfully created database: '. $database."</p>";
        }
    }
    
    else{   //if database already exists, then do this:
        echo "<p>Database already exists.</p>";
    }
    
    $query = $connection->query("CREATE TABLE posts("
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            ."title varchar(255) NOT NULL,"
            . "post text NOT NULL,"
            . "PRIMARY KEY (id))");
    
    if($query){
        echo "Successfully created table: posts";
    }
    else{
        echo "<p>$connection->error</p>";
    }
    
    $connection->close();       //closes connection
    
    //watch blog vid 14 3:37