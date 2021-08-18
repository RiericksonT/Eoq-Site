<?php $this->layout("theme/_theme"); ?>

<div id="main">
    <?php include dirname(__DIR__, 1) . "/components/Header.php"; ?>
    <div id="page">

        <div id="profile">
            <div id="info">
                <div id="photo">
                    <?php if ($user->photo) : ?>
                        <img class="page_user_photo" src="<?= $user->photo; ?>" alt="<?= $user->first_name; ?>" title="<?= $user->first_name; ?>" />
                    <?php endif; ?>
                </div>
                <h3>Olá <?= $user->first_name; ?> <?= $user->last_name; ?>,</h3>
                <p>Aqui é sua conta no projeto, mas por enquanto a única coisa que você pode fazer é sair dela :P</p>
                <p><a class="btn btn-green" href="<?= $router->route("app.logout"); ?>" title="Sair agora">SAIR AGORA :)</a></p>
            </div>
        </div>

        <div id="feed">
            <div class="post">
                <div class="card card-post">
                    <div class="card-header">
                        <img class="post-usericon" src="<?= $post->id_user; ?>" alt="<?= $post->id_user; ?>" />
                        <span><?= $post->usuario; ?></span>
                    </div>

                    <div class="card-body post-image" data-img="<?= $post->imagem; ?>" data-idpost="<?= $post->id; ?>">

                    </div>

                    <div class="card-footer">
                        <div class="actionButtons">
                            <div class="item likeButton" data-idPost="<?= $post->id ?>">
                                <i class="<?= ($post->liked > 0) ? 'text-danger fas' : 'far'; ?> fa-heart"></i>
                            </div>
                            <div class="item">
                                <i class="far fa-comment"></i>
                            </div>
                            <div class="item">
                                <i class="far fa-share-square"></i>
                            </div>
                        </div>

                        <div class="post-comments" data-idpost="<?= $post->id; ?>">
                            <?php if ($post->descricao != '') : ?>
                                <div class="comment">
                                    <span class="user"><?= $post->usuario; ?></span>
                                    <span class="text"><?= nl2br($post->descricao); ?></span>
                                </div>
                            <?php endif;
                            foreach ($comments as $comment) :
                            ?>
                                <div class="comment">
                                    <span class="user"><?= $comment->id_users; ?></span>
                                    <span class="text"><?= nl2br($comment->comment); ?></span>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                        <form method="POST" action="" class="d-flex commentContainer">
                            <div class="w-100 d-inline p-2">
                                <input type="hidden" name="id_post" value="<?= $post->id; ?>" />
                                <input name="message" type="text" class="messageComment form-control" placeholder="Digite sua mensagem" />
                            </div>
                            <div class="d-inline">
                                <button class="submitComment h-100"><i class="fas fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="relations">
            <h1>salve</h1>
        </div>

    </div>
    <?php include dirname(__DIR__, 1) . "/components/Footer.php"; ?>
</div>
<?php $this->start("scripts"); ?>
<script src="<?= asset("js/ajaxMVP.js"); ?>"></script>
