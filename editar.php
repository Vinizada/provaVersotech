<?php 
  include_once("./templates/header.php");
  $id = $_GET["id"];
?>
  <div class="container">
  <?php include_once("./templates/backbtn.html"); ?>
    <h1 id="main-title">Editar Usuário</h1>
    <form id="edit-form" action="./processaAcoes.php" method="POST">
      <input type="hidden" name="type" value="edit">
      <input type="hidden" name="id" value="<?= $id ?>">
      <div class="form-group">
        <label for="name">Nome do usuário:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required value="<?= $user->name ?>">
      </div>
      <div class="form-group">
        <label for="phone">Email do usuário:</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email" required value="<?= $user->email ?>">
      </div>
      <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
      <br>
        <div class="container">
            <h2 id="main-title">Cores vinculadas</h2>
                <table class="table" id="colors-table">

                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($coresVinculadas as $color): ?>
                            <tr>
                                <td scope="row" style="background-color: <?php echo $color->name; ?>"><?= $color->id ?> </td>
                                <td scope="row" style="background-color: <?php echo $color->name; ?>"><?= $color->name  ?> </td>
                                <td class="actions" style="background-color: <?php echo $color->name; ?>">
                                <form class="delete-form" action="./processaAcoes.php" method="POST">
                                    <input type="hidden" name="type" value="removerVinculo">
                                    <input type="hidden" name="colorId" value="<?= $color->id ?>">
                                    <input type="hidden" name="userId" value="<?= $id ?>">
                                    <button type="submit"><i class="fas fa-times delete-icon"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
        <div class="container">
            <h2 id="main-title">Cores sem vínculo</h2>
                <table class="table" id="colors-table">

                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($coresSemVinculo as $color): ?>
                            <tr>
                                <td scope="row" style="background-color: <?php echo $color->name; ?>"><?= $color->id ?> </td>
                                <td scope="row" style="background-color: <?php echo $color->name; ?>"><?= $color->name  ?> </td>
                                <td class="actions" style="background-color: <?php echo $color->name; ?>">
                                <form class="vinculo-form" action="./processaAcoes.php" method="POST">
                                    <input type="hidden" name="type" value="vinculo">
                                    <input type="hidden" name="colorId" value="<?= $color->id ?>">
                                    <input type="hidden" name="userId" value="<?= $id ?>">
                                    <button type="submit">Vincular</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
  </div>
<?php include_once("templates/footer.php") ?>