<?php
session_start();

if(!$_SESSION['usuario']) {
    header('Location: ../index.php');
    exit();
}
?>

<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agenda</title>
        <link rel="stylesheet" href="../estilo/style.css" type="text/css">
    </head>
    
    <body class="fundo-branco">
<?php
    include("estrutura/head.php");
    include("estrutura/menu.php");
    include("estrutura/conteudo.php");
    include("estrutura/footer.php");
?>

</body>
</html>

