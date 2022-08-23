<?php

    $server = "localhost";
    $user = "root";
    $passdb = "";
    $db = "projdb";
    $connect = mysqli_connect( $server, $user, $passdb, $db )or die( "Connection Error" );

?>