<?php
    $hostname = "christopher-horton.co.uk.mysql";
    $password = "RLQPxJF9";
    $username = "christopher_hor"; 
    $database = "christopher_hor";

    //connection to the database
    $sql = new mysqli($hostname, $username, $password, $database);

   // Check connection
    if ($sql->connect_error) {
        die("Connection failed: " . $sql->connect_error);
    }
    
?>