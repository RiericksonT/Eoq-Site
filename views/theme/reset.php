<?php $this->layout("theme/_theme"); ?>

<div class="main_content_box">
    <?php include dirname(__DIR__, 1) . "/components/Header.php"; ?>
    <div id="resetMain">
        <div id="ladoEsquerdoReset">
            <img src="<?= imagePath("background.png") ?>" alt="Logo" />
            <p>Aqui você pode recuperar a sua senha.</p>
        </div>
        <div id="separador" class="divisor">
            <hr id="separador_horizontal" />
        </div>
        <div id="ladoDireitoReset">
            <p>Recuperar sua senha.</p>
            <form class="form" action="<?= $router->route("auth.reset"); ?>" method="post" autocomplete="off">
                <div class="login_form_callback">
                    <?= flash(); ?>
                </div>
                <input autocomplete="" type="password" name="passwd" placeholder="Cadastre uma nova senha:" />
                <input autocomplete="" type="password" name="password_re" placeholder="Repita sua nova senha:" />
                <button type="submit"> Atualizar Senha </button>
                <a id="voltarLogin" href="<?= $router->route('web.login'); ?>" title="Voltar ao Login">Voltar ao Login</a>
            </form>
        </div>
    </div>
    <?php include dirname(__DIR__, 1) . "/components/Footer.php"; ?>
</div>

<?php $this->start("scripts"); ?>
<script src="<?= asset("/js/form.js"); ?>"></script>
<?php $this->end(); ?>
