<div class="feedPost">

    <div class="cardHeader">
        <img class="postUsericon" src="<?= $post->photo; ?>" alt="<?= $post->first_name; ?><?= $post->last_name; ?>">
        <span><?= $post->first_name; ?> <?= $post->last_name; ?></span>
    </div>

    <div class="cardBody">
        <p class="question"><?= nl2br($post->description); ?></p>
    </div>

    <div class="cardFooter">
        <div class="postComments" data-idPost="<?= $post->id; ?>">
            <?php
            $comments = json_decode($post->comments);
            if (!empty($comments)) :
                foreach ($comments as $comment) :
            ?>
                    <div class="comment">
                        <span class="user"><?= $comment->first_name; ?> <?= $comment->last_name; ?></span>
                        <span class="text"><?= nl2br($comment->comment); ?></span>
                    </div>
            <?php
                endforeach;
            endif;
            ?>
            <div id="commentAjax" style="display: none;"> </div>
            <form id="formComment" class="post" action="<?= $router->route("feed.comment"); ?>" name="post" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="">
                    <input type="hidden" name="id_user" value="<?= $user->id; ?>">
                    <input type="hidden" name="id_post" value="<?= $post->id; ?>">
                    <input name="message" type="text" class="messageComment" placeholder="Digite sua mensagem">
                    <button class="submitComment"><i class="fas fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
