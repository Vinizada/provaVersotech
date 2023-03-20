<?php

  session_start();  

  require_once('processamentoBanco.php');

  $processaBanco = new ProcessamentoBanco();
  
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if($_POST["type"] == "delete"){

        $processaBanco->deletarUsuario($_POST['id']);

        header('Location: index.php');

    } else if($_POST["type"]  == "create"){

        $processaBanco->criarUsuario($_POST['name'], $_POST['email']);

        header('Location: index.php');

    } else if($_POST["type"]  == "createColor"){

        $processaBanco->criarCor($_POST['nameColor']);

        header('Location: index.php');

    } else if($_POST["type"] == "edit"){
        
        $processaBanco->editarUsuario($_POST['id'],$_POST['name'], $_POST['email']);

        header('Location: index.php');

    } else if($_POST["type"] == "vinculo"){
        
        $processaBanco->vinculaUsuarioECor($_POST['userId'], $_POST['colorId']);

        header('Location: editar.php?id='.$_POST['userId']);

        exit();

    } else if($_POST["type"] == "removerVinculo"){
        
        $processaBanco->desvinculaUsuarioECor($_POST['userId'], $_POST['colorId']);

        header('Location: editar.php?id='.$_POST['userId']);

        exit();

    }

    exit();

  } else {

    $id;

    if(!empty($_GET)) {
      $id = $_GET["id"];
    }
    
    // Retorna dado de um post específico
    if(!empty($id)) {

      $user = $processaBanco->buscaUsuario($id);
      $coresSemVinculo = $processaBanco->buscaCoresNaoVinculadas($id);
      $coresVinculadas = $processaBanco->buscaCoresVinculadas($id);

    // Retorna todos os contatos
    } else {

      $users = $processaBanco->buscaUsuarios();
    }

}

?>

