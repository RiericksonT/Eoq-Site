<?php $this->layout("theme/_theme"); ?>
<!DOCTYPE html>

<div class="main_content_box">
    <div id="pageLogin">
        <div id="ladoEsquerdo">
            <img src="<?= imagePath("background.png") ?>" alt="Logo" />
            <p>Bem Vindo(a) ao “É o que?”!<br />
                Um site feito para você sanar
                todas as suas duvidas!</p>
        </div>
        <div id="separador" class="divisor">
            <hr id="separador_horizontal" />
        </div>
        <div id="ladoDireito">
            <p id="textoBemVindo">
                <img src="<?= imagePath("logoIcon.ico") ?>" alt="Logo" />
                Welcome!
            </p>
            <form class="form" action="<?= $router->route("auth.loginAdmin"); ?>" method="post" autocomplete="off">

                <div class="login_form_callback">
                    <?= flash(); ?>
                </div>

                <input value="" type="email" name="email" placeholder="Informe seu e-mail:" />
                <p id="textoEmail">email</p>
                <input autocomplete="" type="password" name="passwd" placeholder="Informe sua senha:" />
                <p id="textoSenha">senha</p>
                <button type="submit"> Login </button>

            </form>
        </div>
    </div>
</div>

<?php $this->start("scripts"); ?>
<script src="<?= asset("js/form.js"); ?>"></script>
<?php $this->end(); ?>
