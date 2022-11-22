<?php 

if(!isset($_SESSION)){
    session_start();
}
session_destroy(); //destrói as variáveis.
//deixa de salvar.

header("Location: login.php");

?>