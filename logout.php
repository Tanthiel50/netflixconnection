<?php
    session_start(); //Initialiser
    session_unset(); // Desactiver
    session_destroy(); //Détruire
    
    setcookie('auth', '', time() - 1);

    header('location: index.php');
    exit();