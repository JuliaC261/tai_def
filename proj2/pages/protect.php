<?php 

//iniciar sessão
if(!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['id'])){
    die("Você deve estar logado para acessar o painel!
    <p><a href=\"login.php\">Logar</a></p>");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- mostrar o nome do usuário -->
    Bem vindo ao painel, <?php echo $_SESSION['nome']; ?>

    <p>
        <a href="logout.php">Sair</a>
    </p>
    
</body>
</html>