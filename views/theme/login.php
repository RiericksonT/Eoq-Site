<?php $this->layout("theme/_theme"); ?>
<!DOCTYPE html>

<div class="main_content_box">

    <div class="ladoEsquerdo">
        <img src="<?= imagePath("logo.png") ?>" alt="Logo" />
        <p>Bem Vindo(a) ao “É o que?”!<br />
            um site feito para você sanar<br />
            todas as suas duvidas!</p>
    </div>
    <div class="linha-vertical"> </div>
    <div class="ladoDireito">
        <form class="form" action="<?= $router->route("auth.login"); ?>" method="post" autocomplete="off">

            <p id="textoBemVindo">Hello, Welcome!</p>

            <div class="login_form_callback">
                <?= flash(); ?>
            </div>

            <input value="" type="email" name="email" placeholder="Informe seu e-mail:" />
            <p id="textoEmail">email</p>
            <input autocomplete="" type="password" name="passwd" placeholder="Informe sua senha:" />
            <p id="textoSenha">senha</p>
            <a href="<?= $router->route("web.forget"); ?>" title="Recuperar Senha">Recuperar Senha</a>
            <button type="submit"> Login </button>

            <div class="form_social">
                <button onclick="location.href='<?= $router->route('auth.facebook'); ?>'" class="btn-facebook">Facebook Login</button>
                <button onclick="location.href='<?= $router->route('auth.google'); ?>'" class="btn-google">Google Login</button>
            </div>

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
