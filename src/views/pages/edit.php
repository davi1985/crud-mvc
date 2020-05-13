<?php $render('header'); ?>

    <div class="container">
        <h2>Editar Usuário</h2>

        <form method="POST" action="<?= $base; ?>/usuario/<?= $user['id'] ?>/editar">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="<?= $base ?>/" class="btn btn-primary">Voltar</a>
        </form>
    </div>

<?php $render('footer');
