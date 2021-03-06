<?php
ob_start();
session_start();

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(site());
$router->namespace("source\Controllers");

/**
 * WEB
 */
$router->group(null);
$router->get("/", "Web:login", "web.login");
$router->get("/cadastrar", "Web:register", "web.register");
$router->get("/recuperar", "Web:forget", "web.forget");
$router->get("/senha/{email}/{forget}", "Web:reset", "web.reset");

/**
 * TERMS AND PRIVACY
 */
$router->group(null);
$router->get("/termos", "Terms:terms", "terms.terms");
$router->get("/privacidade", "Terms:privacy", "terms.privacy");

/**
 * AUTH
 */
$router->group(null);
$router->post("/login", "Auth:login", "auth.login");
$router->post("/register", "Auth:register", "auth.register");
$router->post("/forget", "Auth:forget", "auth.forget");
$router->post("/reset", "Auth:reset", "auth.reset");

/**
 * AUTH SOCIAL
 */
$router->group(null);
$router->get("/facebook", "Auth:facebook", "auth.facebook");
$router->get("/google", "Auth:google", "auth.google");

/**
 * PROFILE
 */
$router->group(null);
$router->group("/me");
$router->get("/", "App:home", "app.home");
$router->get("/sair", "App:logout", "app.logout");
//$router->get("/", "Post:home", "post.home");
$router->post("/create", "Feed:create", "feed.create");
$router->post("/comment", "Feed:comment", "feed.comment");
$router->post("/delete", "Feed:delete", "feed.delete");

/**
 * ADMIN
 */
$router->group(null);
$router->group("/root");
$router->get("/", "WebAdmin:login", "webAdmin.login");
$router->post("/login", "Auth:loginAdmin", "auth.loginAdmin");
$router->group(null);
$router->group("/admin");
$router->get("/", "Admin:home", "admin.home");
$router->get("/sair", "Admin:logout", "admin.logout");

/**
 * ERRORS
 */
$router->group("ooops");
$router->get("/{errcode}", "Web:error", "web.error");

/**
 * ROUTE PROCESS
 */
$router->dispatch();

/**
 * ERRORS PROCESS
 */
if ($router->error()) {
    $router->redirect("web.error", ["errcode" => $router->error()]);
}

ob_end_flush();
