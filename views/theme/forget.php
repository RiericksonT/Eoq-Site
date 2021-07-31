<?php $this->layout("theme/_theme"); ?>

<div class="main_content_box">
    <?php include dirname(__DIR__, 1) . "/components/Header.php"; ?>
    <div class="login">
        <form class="form" action="<?= $router->route("auth.forget"); ?>" method="post" autocomplete="off">
            <div class="login_form_callback">
                <?= flash(); ?>
            </div>

            <label>
                <span class="field">E-mail:</span>
                <input value="" type="email" name="email" placeholder="Informe seu e-mail:" />
            </label>

            <div class="form_actions">
                <button class="btn-green">Recuperar Minha Senha</button>
            </div>
        </form>

        <div class="form_register_action">
            <p>Você também pode:</p>
            <button onclick="location.href='<?= $router->route('web.login'); ?>'" class="btn-blue">Voltar ao Login</button>
        </div>
    </div>
    <?php include dirname(__DIR__, 1) . "/components/Footer.php"; ?>
</div>

<?php $this->start("scripts"); ?>
<script src="<?= asset("/js/form.js"); ?>"></script>
<?php $this->end(); ?>
