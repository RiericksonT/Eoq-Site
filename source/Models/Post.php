<?php


namespace Source\Models;


use CoffeeCode\DataLayer\DataLayer;

/**
 * Undocumented class
 */
class Post extends DataLayer
{
    /**
     * Undocumented function
     */
    public function __construct()
    {
        parent::__construct("post", ["id_users", "title", "description", "category"], "id", false);
    }

    /**
     * Undocumented function
     *
     * @param User $user
     * @param string $title
     * @param string $description
     * @param string $category
     * @return Post
     */
    public function add(User $user, string $title, string $description, string $category): Post
    {
        $this->id_users = $user->id;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function commentPosts()
    {
        return (new CommentPost())->find("id_post = :id_post", "id_post:{$this->id}")->fetch(true);
    }

    public function findPostComment()
    {
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
