<?php $this->layout("theme/_theme"); ?>

<div class="page">
    <?php include dirname(__DIR__, 1) . "/components/Header.php"; ?>
    <div>
        <h1>Ooops, erro <?= $error; ?></h1>
        <p>Desculpe por isso, caso o problema persista, por favor entre em contato conosco.</p>
        <p><a class="btn btn-blue" href="<?= $router->route("web.login"); ?>" title="<?= site("name"); ?>">VOLTAR!</a></p>
    </div>
    <?php include dirname(__DIR__, 1) . "/components/Footer.php"; ?>
</div>
