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
                <p>Aqui é sua conta no projeto, mas por enquanto a única coisa que você pode fazer é sair dela :P</p>
                <p><a class="btn btn-green" href="<?= $router->route("app.logout"); ?>" title="Sair agora">SAIR AGORA :)</a></p>
            </div>
        </div>
        <div id="feed">
            <div class="create">
                <div id="post--Ajax" style="display: none;">
                </div>
                <form id="formPost" class="post" action="<?= $router->route("feed.create"); ?>" name="post" method="post" enctype="multipart/form-data" autocomplete="off">
                    <label>
                        <input type="hidden" name="id_user" value="<?= $user->id; ?>">
                        <input type="text" name="title" placeholder="Titulo:" />
                        <input type="text" name="description" placeholder="Pergunta:" />
                        <input type="text" name="category" placeholder="Categoria:" />
                        <button>Postar</button>
                    </label>
                </form>
            </div>
            <section class="posts">
                <?php
                if (!empty($posts)) :
                    foreach ($posts as $post) :
                        include dirname(__DIR__, 1) . "/components/posts.php";
                    endforeach;
                endif;
                ?>
            </section>
        </div>
        <div id="relations">
            <h1>salve</h1>
        </div>
    </div>
    <?php include dirname(__DIR__, 1) . "/components/footer.php"; ?>
</div>

<?php $this->start("scripts"); ?>
<script src="<?= asset("js/form.js"); ?>"></script>
<?php $this->end(); ?>
