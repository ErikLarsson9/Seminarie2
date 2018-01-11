<?php
    session_start();
    $_SESSION['previousPage'] = $_SERVER['REQUEST_URI'];
?>