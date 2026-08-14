<?php 

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die("Você tem muita pouca aura pra poder entrar aqui, logue primeiro beta");
}
?>