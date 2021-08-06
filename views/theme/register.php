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
                <form class="form" name="reset" action="<?= $router->route("auth.reset"); ?>" method="post" autocomplete="off">
                    <div class="login_form_callback">
                        <?= flash(); ?>
                    </div>
                    <input type="text" placeholder="seu nome" name="nome" required />
                    <input type="text" placeholder="seu email" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" name="email" required />
                    <input type="password" placeholder="sua senha" name="senha" required />
                    <input type="password" placeholder="confirme sua senha" name="confirmSenha" required />
                    <input type="date" name="idade" required />
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
