<?php
session_start();
    session_unset();
    session_destroy();
    setcookie("email", "", time() - 31556926);
    unset($_COOKIE['email']);
header("location: login.php");