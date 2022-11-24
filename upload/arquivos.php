<?php 

if(isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];

    if($arquivo['error'])
    die("Falha ao carregar arquivo");

    if($arquivo['size'] > 2097152)
      die("arquivo muito grande! Max: 2mb");


      $pasta = "arquivos/";
}

//criando uma consulta ao banco
$sql_query = $mysqli -> query ("SELECT * FROM arquivos") or 
   die($mysqli -> error);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form method="$_POST" enctype="multipart/form-data" action="">

    <p><label for="">Selecione o arquivo</label>
    <input name="arquivo" type="file"></p>
    <button name="upload" type="submit">Enviar arquivo</button>
</form>

<table>
    
</table>

<?php 
while($arquivo = $sql_query -> fetch_assoc()) {

}
?>

</body>
</html>
