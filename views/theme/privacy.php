<?php $this->layout("theme/_theme"); ?>

<div class="page">
    <?php include dirname(__DIR__, 1) . "/components/Header.php"; ?>
    <div>
        <?php include dirname(__DIR__, 1) . "/components/privacyPolicy.php"; ?>
        <p><a class="btn btn-blue" href="<?= $router->route("web.login"); ?>" title="<?= site("name"); ?>">VOLTAR!</a></p>
    </div>
    <?php include dirname(__DIR__, 1) . "/components/Footer.php"; ?>
</div>
