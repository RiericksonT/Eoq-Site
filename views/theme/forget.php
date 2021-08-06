<?php $this->layout("theme/_theme"); ?>

<div class="main_content_box">
    <?php include dirname(__DIR__, 1) . "/components/Header.php"; ?>
    <div id="forgetMain">
        <div id="ladoEsquerdoForget">
            <img src="<?= imagePath("background.png") ?>" alt="Logo" />
            <p>Aqui você pode recuperar a sua senha.</p>
        </div>
        <div id="separador" class="divisor">
            <hr id="separador_horizontal" />
        </div>
        <div id="ladoDireitoForget">
            <p>Informe seu e-mail para recuperar a sua senha.</p>
            <form class="form" action="<?= $router->route("auth.forget"); ?>" method="post" autocomplete="off">
                <div class="login_form_callback">
                    <?= flash(); ?>
                </div>
                <input type="text" placeholder="seu email" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" name="email" required />
                <button type="submit"> Recuperar senha </button>
                <a id="voltarLogin" href="<?= $router->route('web.login'); ?>" title="Voltar ao Login">Voltar ao Login</a>
            </form>
        </div>
    </div>
    <?php include dirname(__DIR__, 1) . "/components/Footer.php"; ?>
</div>

<?php $this->start("scripts"); ?>
<script src="<?= asset("/js/form.js"); ?>"></script>
<?php $this->end(); ?>
