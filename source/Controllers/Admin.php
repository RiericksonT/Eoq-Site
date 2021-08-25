<?php


namespace Source\Controllers;


use Source\Models\User;
use Source\Models\FeedPostReport;

/**
 * Undocumented class
 */
class Admin extends Controller
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

        if (empty($_SESSION["admin"]) || !$this->user = (new User())->findById($_SESSION["admin"])) {
            unset($_SESSION["admin"]);

            flash("error", "Acesso negado. Por favor, faça o login!");
            $this->router->redirect("webAdmin.login");
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
            $this->router->route("admin.home"),
            routeImage("Conta de {$this->user->first_name}")
        )->render();

        $post = (new FeedPostReport())->find()->group("id")->fetch(true);

        echo $this->view->render("theme/dashboardAdmin", [
            "head" => $head,
            "user" => $this->user,
            "posts" => $post
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
        $this->router->redirect("webAdmin.login");
    }
}
