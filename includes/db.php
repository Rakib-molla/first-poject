<?php
    // define database parameter
    $db['db_host'] = "localhost";
    $db['db_user'] = "root";
    $db['db_pass'] = "";
    $db['db_name'] = "cms";

    // loop thru the array to make them into constants
    foreach ($db as $key => $value){
        define (strtoupper($key), $value);
    }

    // connect to database
    $connection = mysqli_connect (DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if ($connection){
        echo " ";
    }
?>