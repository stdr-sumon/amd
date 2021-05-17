<?php
    $conn_string = "host=localhost port=5432 dbname=amd user=postgres password=123456";
    $dbconn = pg_connect($conn_string);
    if(!$dbconn) {
        echo "Error : unable to open database\n";
    } else {
        echo "Connect sucessfully";
    }
    //connect to a database named "test" on the host "sheep" with a username and password
