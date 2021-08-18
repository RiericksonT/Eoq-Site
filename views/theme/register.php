<?php $this->layout("theme/_theme"); ?>

<div class="main_content_box">
    <?php include dirname(__DIR__, 1) . "/components/Header.php"; ?>
    <div id="SubscribeMain">
        <div id="SubscribeBodyLeft">
            <p>Voce esta quase la!</p>
            <hr id="separador_horizontal" />
            <p class="SubscribeText">Faca seu signin com o Google:</p>
            <button onclick="location.href='<?= $router->route('auth.google'); ?>'" class="btn-google"><img src="<?= imagePath("googleLogo.png") ?>" alt=""></button>
            <p class="SubscribeText">Faca seu signin com o Facebook:</p>
            <button onclick="location.href='<?= $router->route('auth.facebook'); ?>'" class="btn-facebook"><img src="<?= imagePath("facebookLogo.png") ?>" alt=""></button>
        </div>
        <div id="separador" class="divisor">
            <hr id="separador_horizontal" />
        </div>
        <div id="SubscribeBodyRight">
            <p>Preencha suas informações:</p>
            <div class="login">
                <form class="form" action="<?= $router->route("auth.register"); ?>" method="post" autocomplete="off">
                    <div class="login_form_callback">
                        <?= flash(); ?>
                    </div>
                    <input value="<?= $user->first_name; ?>" type="text" name="first_name" placeholder="Primeiro nome:" required />
                    <input value="<?= $user->last_name; ?>" type="text" name="last_name" placeholder="Último nome:" required />
                    <input value="<?= $user->email; ?>" type="email" name="email" placeholder="Informe seu e-mail:" required />
                    <input autocomplete="" type="password" name="passwd" placeholder="Informe sua senha:" required />
                    <input autocomplete="" type="date" name="birth_date" placeholder="Informe sua data de nascimento:" required />
                    <button>Inscreva-se</button>
                    <a id="voltarLogin" href="<?= $router->route('web.login'); ?>" title="Voltar ao Login">Voltar ao Login</a>
                </form>
            </div>
        </div>
    </div>
    <?php include dirname(__DIR__, 1) . "/components/Footer.php"; ?>
</div>

<?php $this->start("scripts"); ?>
<script src="<?= asset("/js/form.js"); ?>"></script>
<?php $this->end(); ?>
