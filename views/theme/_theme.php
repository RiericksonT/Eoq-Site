<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <?php $this->unshift("head") ?>

    <link rel="stylesheet" href="<?= asset("/style.min.css"); ?>" />
    <link rel="icon" type="image/png" href="<?= asset("/images/logoIcon.ico"); ?>" />
</head>

<body>

    <main class="main_content">
        <?= $this->section("content"); ?>
    </main>

    <script src="<?= asset("/scripts.min.js"); ?>"></script>
    <?= $this->section("scripts"); ?>
</body>

</html>
