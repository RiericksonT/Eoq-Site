<?php $this->layout("theme/_theme"); ?>

<div id="main">
    <?php include dirname(__DIR__, 1) . "/components/Header.php"; ?>
    <div id="page">
        <div id="profile">
            <div id="photo">
                <?php if ($user->photo) : ?>
                    <img class="page_user_photo" src="<?= $user->photo; ?>" alt="<?= $user->first_name; ?>" title="<?= $user->first_name; ?>" />
                <?php endif; ?>
            </div>
            <h3>Olá <?= $user->first_name; ?> <?= $user->last_name; ?>,</h3>
            <p>Aqui é sua conta no projeto, mas por enquanto a única coisa que você pode fazer é sair dela :P</p>
            <p><a class="btn btn-green" href="<?= $router->route("app.logout"); ?>" title="Sair agora">SAIR AGORA :)</a></p>
        </div>
        <div id="feed">
            <h1>salve</h1>
        </div>
        <div id="relations">
            <h1>salve</h1>
        </div>
    </div>
    <?php include dirname(__DIR__, 1) . "/components/Footer.php"; ?>
</div>
