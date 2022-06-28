<?php
session_start();
$_SESSION = [];
session_destroy();
header('Location: ../../login.php');
// pour sortie de notre site(deconnecter)