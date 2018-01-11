<?php
//    session_start();
    //if 2 Session is active
    $status = session_status();
    echo $status;
    //$newid = session_create_id('myprefix-');
    $session= session_name();

    echo $session;

    $id = session_id();
    echo $id;
    if(isset($_SESSION['user'])){
        echo 'Welcome '.$_SESSION['user'].'!';

    }


?>

