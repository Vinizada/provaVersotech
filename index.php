<?php

    include_once("./templates/header.php");

?>

            <div class="container">

            <h1 id="main-title">Usuários Cadastrados</h1>

                <table class="table" id="users-table">

                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td scope="row"><?= $user->id ?> </td>
                                <td scope="row"><?= $user->name  ?> </td>
                                <td scope="row"><?= $user->email  ?> </td>
                                <td class="actions">
                                    <a href="./editar.php?id=<?= $user->id ?>"><i class="far fa-edit edit-icon"></i></a>
                                <form class="delete-form" action="./services/processaAcoes.php" method="POST">
                                    <input type="hidden" name="type" value="delete">
                                    <input type="hidden" name="id" value="<?= $user->id  ?>">
                                    <button type="submit"><i class="fas fa-times delete-icon"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

            </div>
<?php

    include_once("templates/footer.php");

?>

