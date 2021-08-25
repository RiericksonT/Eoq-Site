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
<<<<<<< HEAD
                <p>Aqui é sua conta no projeto, mas por enquanto a única coisa que você pode fazer é sair dela :P</p>
=======
                <p>Aqui é sua conta no projeto :P</p><br />
                <p><i class="fas fa-angle-double-right"></i> Em desenvolvimento <i class="fas fa-angle-double-left"></i></p><br />
>>>>>>> teste
                <p><a class="btn btn-green" href="<?= $router->route("app.logout"); ?>" title="Sair agora">SAIR AGORA :)</a></p>
            </div>
        </div>

        <div id="feed">
<<<<<<< HEAD
            <div class="post">
                <!-- Modelo publicação -->
                <?php
                if (isset($posts)) :
                    foreach ($posts as $post) :
                        $comments = json_decode($post['comments']);
                ?>

                        <div class="card card-post">
                            <div class="card-header">
                                <img class="post-usericon" src="<?= $post['photo']; ?>" alt="<?= $post['first_name']; ?><?= $post['last_name']; ?>">
                                <span><?= $post['first_name']; ?><?= $post['last_name']; ?></span>
                            </div>

                            <div class="card-footer">
                                <!---<div class="actionButtons">
                                    <div class="item">
                                        <i class="far fa-comment"></i>
                                    </div>
                                    <div class="item">
                                        <i class="far fa-share-square"></i>
                                    </div>
                                </div>--->

                                <div class="post-comments" data-idpost="<?= $post['id']; ?>">
                                    <?php if ($post['description'] != '') : ?>
                                        <div class="comment">
                                            <span class="user"><?= $post['first_name']; ?><?= $post['last_name']; ?></span>
                                            <span class="text"><?= nl2br($post['description']); ?></span>
                                        </div>
                                    <?php endif;
                                    foreach ($comments as $comment) :
                                    ?>
                                        <div class="comment">
                                            <span class="user"><?= $comment->first_name; ?><?= $comment->last_name;; ?></span>
                                            <span class="text"><?= nl2br($comment->comment); ?></span>
                                        </div>
                                    <?php
                                    endforeach;
                                    ?>
                                </div>
                                <form method="POST" action="" class="d-flex commentContainer">
                                    <div class="w-100 d-inline p-2">
                                        <input type="hidden" name="id_post" value="<?= $post['id']; ?>">
                                        <input name="message" type="text" class="messageComment form-control" placeholder="Digite sua mensagem">
                                    </div>
                                    <div class="d-inline">
                                        <button class="submitComment h-100"><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                <?php
=======
            <div class="create">
                <div id="postAjax" style="display: none;"> </div>
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
            <div class="posts">
                <?php
                if (!empty($posts)) :
                    foreach ($posts as $post) :
                        include dirname(__DIR__, 1) . "/components/posts.php";
>>>>>>> teste
                    endforeach;
                endif;
                ?>
            </div>
<<<<<<< HEAD

=======
>>>>>>> teste
        </div>

        <div id="relations">
            <p> <i class="fas fa-angle-double-right"></i> Em desenvolvimento <i class="fas fa-angle-double-left"></i></p>
        </div>

    </div>
    <?php include dirname(__DIR__, 1) . "/components/footer.php"; ?>
</div>
<<<<<<< HEAD
<?php $this->start("scripts"); ?>
<script src="<?= asset("js/ajaxMVP.js"); ?>"></script>
=======

<?php $this->start("scripts"); ?>
<script src="<?= asset("js/form.js"); ?>"></script>
<?php $this->end(); ?>
>>>>>>> teste
