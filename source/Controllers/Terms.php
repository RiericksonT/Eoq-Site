<?php


namespace Source\Controllers;


/**
 * Undocumented class
 */
class Terms extends Controller
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
    public function terms(): void
    {
        $head = $this->seo->optimize(
            "Termos de Uso do site | " . site("name"),
            site("desc"),
            $this->router->route("terms.terms"),
            routeImage("Termos de Uso")
        )->render();
        echo $this->view->render("theme/terms", [
            "head" => $head
        ]);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function privacy(): void
    {
        $head = $this->seo->optimize(
            "Política Privacidade do site | " . site("name"),
            site("desc"),
            $this->router->route("terms.privacy"),
            routeImage("Política Privacidade")
        )->render();
        echo $this->view->render("theme/privacy", [
            "head" => $head
        ]);
    }
}
