<?php $render('header'); ?>

<div class="container">
    <div class="row">
        <a class="btn btn-primary" href="<?= $base; ?>/novo">Adicionar novo Usuário</a>
    </div>
    <br>
    <div class="row">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>

            <?php foreach ($users as $user): ?>
                <tbody>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td>
                        <a class="btn btn-outline-primary btn-sm" href="<?= $base ?>/usuario/<?= $user['id'] ?>/editar">Editar</a>
                        <a class="btn btn-outline-danger btn-sm" href="<?= $base ?>/usuario/<?= $user['id'] ?>/excluir" onclick="return confirm('Deseja realmente excluir esse registro??')">Excluir</a>
                    </td>
                </tr>
                </tbody>

            <?php endforeach; ?>
        </table>
    </div>
</div>

<?php $render('footer'); ?>
