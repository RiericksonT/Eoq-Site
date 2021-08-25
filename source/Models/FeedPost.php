<?php


namespace Source\Models;


use CoffeeCode\DataLayer\DataLayer;

/**
 * Undocumented class
 */
class FeedPost extends DataLayer
{
    /**
     * Undocumented function
     */
    public function __construct()
    {
        parent::__construct("view_user_post_comment", ["id", "id_users", "title", "description", "category", "first_name", "last_name"], "", false);
    }
}
