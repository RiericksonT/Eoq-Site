<?php


namespace Source\Models;


use CoffeeCode\DataLayer\DataLayer;

/**
 * Undocumented class
 */
class CommentPost extends DataLayer
{
    /**
     * Undocumented function
     */
    public function __construct()
    {
        parent::__construct("comment_post", ["id_users", "id_post", "comment"], "id", false);
    }

    /**
     * Undocumented function
     *
     * @param User $user
     * @param Post $post
     * @param string $comment
     * @return CommentPost
     */
    public function add(User $user, Post $post, string $comment): CommentPost
    {
        $this->id_users = $user->id;
        $this->id_post = $post->id;
        $this->comment = $comment;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @return boolean
     */
    public function save(): bool
    {
        if (!parent::save()) {
            return false;
        }

        return true;
    }
}
