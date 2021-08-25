<?php


namespace Source\Controllers;


use Source\Models\User;
<<<<<<< HEAD
use Source\Rss\Rss;
=======
use Source\Models\FeedPost;
>>>>>>> teste

/**
 * Undocumented class
 */
class App extends Controller
{
    /** @var User */
    protected $user;

    /**
     * Undocumented function
     *
     * @param [type] $router
     */
    public function __construct($router)
    {
        parent::__construct($router);

        if (empty($_SESSION["user"]) || !$this->user = (new User())->findById($_SESSION["user"])) {
            unset($_SESSION["user"]);

            flash("error", "Acesso negado. Por favor, faça o login!");
            $this->router->redirect("web.login");
            return;
        }
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function home(): void
    {
        $head = $this->seo->optimize(
            "Bem-vindo(a) {$this->user->first_name} | " . site("name"),
            site("desc"),
            $this->router->route("app.home"),
            routeImage("Conta de {$this->user->first_name}")
        )->render();

<<<<<<< HEAD
        $posts = Rss::getPost();
=======
        $post = (new FeedPost())->find()->group("id")->fetch(true);
>>>>>>> teste

        echo $this->view->render("theme/dashboard", [
            "head" => $head,
            "user" => $this->user,
<<<<<<< HEAD
            "posts" => $posts
=======
            "posts" => $post
>>>>>>> teste
        ]);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function logout(): void
    {
        unset($_SESSION["user"]);
        unset($_SESSION["admin"]);

        flash("info", "Você se desconectou, volte logo {$this->user->first_name}");
        $this->router->redirect("web.login");
    }
}
