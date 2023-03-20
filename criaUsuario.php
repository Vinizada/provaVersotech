<?php include_once("./templates/header.php"); ?>
  <div class="container">
  <?php include_once("./templates/backbtn.html"); ?>
    <h1 id="main-title">Criar Usuário</h1>
    <form class="edit-form" action="./processaAcoes.php" method="POST">
      <input type="hidden" name="type" value="create">
      <div class="form-group">
        <label for="name">Nome do usuário:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
      </div>
      <div class="form-group">
        <label for="email">Email do usuário:</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email" required>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
<?php include_once("templates/footer.php") ?>