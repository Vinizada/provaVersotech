<?php include_once("./templates/header.php"); ?>
  <div class="container">
  <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Cadastrar Cor</h1>
    <form class="create-form" action="./processaAcoes.php" method="POST">
      <input type="hidden" name="type" value="createColor">
      <div class="form-group">
        <label for="name">Nome da cor:</label>
        <input type="text" class="form-control" id="nameColor" name="nameColor" placeholder="Digite a cor" required>
      </div>
      <button type="submit" class="btn btn-primary button">Cadastrar Cor</button>
    </form>
</div>
<?php include_once("templates/footer.php") ?>