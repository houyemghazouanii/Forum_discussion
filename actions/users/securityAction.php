<?php
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: login.php');
}
//si l'utilisateur est un authentifier ou non