<?php
  
  include_once("./processaAcoes.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- -->
    <link rel="stylesheet" href="./css/styles.css">
    <title>Prova Versotech</title>
</head>
<body>
    <header>
       <nav class="navbar navbar-expand-lg navbar-dark">

            <a class="navbar-brand" href="./index.php">
                <img src="./img/logoversoteh.svg" alt="Logo da Página">
            </a>
            <div>
            <div class="navbar-nav">
                <a href="./index.php" class="nav-link active">Listagem</a>
                <a href="./criaUsuario.php" class="nav-link active">Criar Usuário</a>
                <a href="./cadastrarCor.php" class="nav-link active">Cadastrar Cor</a>
            </div>
            </div>
        </nav>
    </header>