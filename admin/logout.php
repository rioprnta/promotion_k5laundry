<?php
    session_start();
    $_SESSION['user'] = '';
    $_SESSION['pass'] = '';
    unset($_SESSION['user']);
    unset($_SESSION['pass']);
    session_unset();
    session_destroy();
    header("Location: index.php");
?>