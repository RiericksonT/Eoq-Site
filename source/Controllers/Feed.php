<?php

namespace Source\Controllers;

use Source\Models\CommentPost;
use Source\Models\Post;

/**
 * Undocumented class
 */
class Feed extends Controller
{
    /**
     * Undocumented function
     *
     * @param [type] $router
     */
    public function __construct($router)
    {
        parent::__construct($router);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function home(): void
    {
        echo $this->view->render("home", [
            "posts" => (new Post())->find()->order("pubDate")->fetch(true)
        ]);
    }

    /**
     * Undocumented function
     *
     * @param array $data
     * @return void
     */
    public function create(array $data): void
    {
        $postData = filter_var_array($data, FILTER_SANITIZE_STRING);
        if (in_array("", $postData)) {
            return;
        }
        $post = new Post();
        $post->id_users = filter_var($postData["id_user"], FILTER_SANITIZE_NUMBER_INT);
        $post->title = $postData["title"];
        $post->description = $postData["description"];
        $post->category = $postData["category"];
        $post->save();

        echo [
            "posts" => $post
        ];
    }

    /**
     * Undocumented function
     *
     * @param array $data
     * @return void
     */
    public function comment(array $data): void
    {
        $postData = filter_var_array($data, FILTER_SANITIZE_STRING);
        if (in_array("", $postData)) {
            return;
        }
        $comment = new CommentPost();
        $comment->id_users = $postData["id_user"];
        $comment->id_post = $postData["id_post"];
        $comment->comment = $postData["message"];
        $comment->save();

        $callback["comment"] = $this->view->render(dirname(__DIR__, 2) . "/views/theme/dashboard.php", ["comment" => $comment]);
        echo json_encode($callback);
    }

    /**
     * Undocumented function
     *
     * @param array $data
     * @return void
     */
    public function delete(array $data): void
    {
        if (empty($data["id"])) {
            return;
        }

        $id = filter_var($data["id"], FILTER_VALIDATE_INT);
        $post = (new Post())->findById($id);
        if ($post) {
            $post->destroy();
        }

        $callback["remove"] = true;
        echo json_encode($callback);
    }
}
