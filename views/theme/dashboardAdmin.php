<?php $this->layout("theme/_theme"); ?>

<div id="main">
    <?php include dirname(__DIR__, 1) . "/components/header.php"; ?>
    <div id="page">
        <div id="profile">
            <div id="info">
                <div id="photo">
                    <?php if ($user->photo) : ?>
                        <img class="page_user_photo" src="<?= $user->photo; ?>" alt="<?= $user->first_name; ?><?= $user->last_name; ?>" title="<?= $user->first_name; ?><?= $user->last_name; ?>" />
                    <?php endif; ?>
                </div>
                <h3>Olá <?= $user->first_name; ?> <?= $user->last_name; ?>,</h3>
                <p>Admin <?= $_SESSION['admin']; ?><br />Aqui é sua conta no projeto :P</p><br />
                <p><i class="fas fa-angle-double-right"></i> Em desenvolvimento <i class="fas fa-angle-double-left"></i></p><br />
                <p><a class="btn btn-green" href="<?= $router->route("app.logout"); ?>" title="Sair agora">SAIR AGORA :)</a></p>
            </div>
        </div>
        <div id="feed">
            <div class="posts">
                <?php
                if (!empty($posts)) :
                    foreach ($posts as $post) :
                        include dirname(__DIR__, 1) . "/components/postsAdm.php";
                    endforeach;
                endif;
                ?>
            </div>
        </div>
        <div id="relations">
            <p> <i class="fas fa-angle-double-right"></i> Em desenvolvimento <i class="fas fa-angle-double-left"></i></p>
        </div>
    </div>
    <?php include dirname(__DIR__, 1) . "/components/footer.php"; ?>
</div>

<?php $this->start("scripts"); ?>
<script src="<?= asset("js/form.js"); ?>"></script>
<?php $this->end(); ?>
