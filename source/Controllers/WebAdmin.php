<?php


namespace Source\Controllers;


use League\OAuth2\Client\Provider\FacebookUser;
use League\OAuth2\Client\Provider\GoogleUser;
use Source\Models\User;

/**
 * Undocumented class
 */
class WebAdmin extends Controller
{
    /**
     * Undocumented function
     *
     * @param [type] $router
     */
    public function __construct($router)
    {
        parent::__construct($router);

        if (!empty($_SESSION["admin"])) {
            $this->router->redirect("admin.home");
        } elseif (!empty($_SESSION["user"])) {
            $this->router->redirect("app.home");
        }
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function login(): void
    {
        $head = $this->seo->optimize(
            "Faça login para continuar | " . site("name"),
            site("desc"),
            $this->router->route("webAdmin.login"),
            routeImage("loginAdmin")
        )->render();
        echo $this->view->render("theme/loginAdmin", [
            "head" => $head
        ]);
    }

    /**
     * Undocumented function
     *
     * @param [type] $data
     * @return void
     */
    public function error($data): void
    {
        $error = filter_var($data["errcode"], FILTER_VALIDATE_INT);

        $head = $this->seo->optimize(
            "Ooops {$error} | " . site("name"),
            site("desc"),
            $this->router->route("web.error", ["errcode" => $error]),
            routeImage($error)
        )->render();

        echo $this->view->render("theme/error", [
            "head" => $head,
            "error" => $error
        ]);
    }
}
