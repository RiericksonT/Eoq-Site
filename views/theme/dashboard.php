<?php $this->layout("theme/_theme"); ?>

<div class="page">
    <?php include dirname(__DIR__, 1) . "/components/Header.php"; ?>
    <div>
        <?php if ($user->photo) : ?>
            <img class="page_user_photo" src="<?= $user->photo; ?>" alt="<?= $user->first_name; ?>" title="<?= $user->first_name; ?>" />
        <?php endif; ?>
        <h1>Olá <?= $user->first_name; ?>,</h1>
        <p>Aqui é sua conta no projeto, mas por enquanto a única coisa que você pode fazer é sair dela :P</p>
        <p><a class="btn btn-green" href="<?= $router->route("app.logout"); ?>" title="Sair agora">SAIR AGORA :)</a></p>
    </div>
    <?php include dirname(__DIR__, 1) . "/components/Footer.php"; ?>
</div>
