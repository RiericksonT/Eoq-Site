<?php $this->layout("theme/_theme"); ?>
<!DOCTYPE html>

<div class="main_content_box">

    <div class="ladoEsquerdo">
        <img src="<?= imagePath("background.png") ?>" alt="Logo" />
        <p>Bem Vindo(a) ao “É o que?”!<br />
            um site feito para você sanar
            todas as suas duvidas!</p>
    </div>
    <div class="linha-vertical"> </div>
    <div class="ladoDireito">
        <p id="textoBemVindo">
            <img src="<?= imagePath("logoIcon.ico") ?>" alt="Logo" />
            Welcome!
        </p>
        <p id="textoLogin">Faca seu login com:</p>
        <div class="form_social">
            <button onclick="location.href='<?= $router->route('auth.facebook'); ?>'" class="btn-facebook"><img src="<?= imagePath("facebookLogo.png") ?>" alt=""></button>
            <button onclick="location.href='<?= $router->route('auth.google'); ?>'" class="btn-google"><img src="<?= imagePath("googleLogo.png") ?>" alt=""></button>
        </div>
        <div class="separator">
            <hr class="divisor" />
            <p>OU</p>
        </div>
        <form class="form" action="<?= $router->route("auth.login"); ?>" method="post" autocomplete="off">

            <div class="login_form_callback">
                <?= flash(); ?>
            </div>

            <input value="" type="email" name="email" placeholder="Informe seu e-mail:" />
            <p id="textoEmail">email</p>
            <input autocomplete="" type="password" name="passwd" placeholder="Informe sua senha:" />
            <p id="textoSenha">senha</p>
            <a href="<?= $router->route("web.forget"); ?>" title="Recuperar Senha">Recuperar Senha</a>
            <button type="submit"> Login </button>

        </form>
        <div class="separator">
            <hr class="divisor" />
            <p>Nao tem login? inscreva-se agora!</p>
        </div>
        <button onclick="location.href='<?= $router->route('web.register'); ?>'"> Inscreva-se </button>
    </div>

</div>

<?php $this->start("scripts"); ?>
<script src="<?= asset("/js/form.js"); ?>"></script>
<?php $this->end(); ?>
