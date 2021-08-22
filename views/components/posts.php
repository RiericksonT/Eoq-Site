<article class="feedPost">

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
            foreach ($comments as $comment) :
            ?>
                <div class="comment">
                    <span class="user"><?= $comment->first_name; ?> <?= $comment->last_name; ?></span>
                    <span class="text"><?= nl2br($comment->comment); ?></span>
                </div>
            <?php
            endforeach;
            ?>
            <form method="POST" data-action="<?= $router->route("post.comment"); ?>" data-idPost="<?= $post->id; ?>" data-idUser="<?= $user->id; ?>" class="formComment">
                <div class="">
                    <input name="message" type="text" class="messageComment" placeholder="Digite sua mensagem">
                </div>
                <div class="">
                    <button class="submitComment"><i class="fas fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
    </div>
</article>
