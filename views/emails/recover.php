<div style="width: 500px; max-width: 100%; padding: 10px; font-family: 'Trebuchet MS', sans-serif; font-size: 1.2em;">
    <h4>Prezado(a) <?= $user->first_name; ?>,</h4>
    <p>Recebemos em nosso site uma solicitação para recuperar sua senha, segue o link para recuperação:</p>
    <p><a href="<?= $link; ?>" title="Recuperar Senha">CLIQUE AQUI PARA RECUPERAR SUA SENHA</a></p>
    <p>Caso não tenha solicitado a recuperação de senha ignore este e-mail.</p>
    <p>Atenciosamente <?= site("name"); ?>!</p>
</div>
