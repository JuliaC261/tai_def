<?php 

//criando variáveis
$usuario = 'root';
$senha = "";
$database = "login";
$host="localhost"; //nome que está no heidi

//fazendo a conexão
$mysqli = new mysqli($host, $usuario, $senha, $database);

//verificando se vai dar erro
if ($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}


?>