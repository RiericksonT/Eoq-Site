<?php

/**
 * SITE CONFIG
 */
define("SITE", [
    "name" => "É O Que?",
    "desc" => "autenticação em MVC com php",
    "domain" => "eoque.dhyell.com.br",
    "locale" => "pt_BR",
    "root" => "https://eoque.dhyell.com.br/dhyell/Eoq-Site"
]);

/**
 * SITE MINIFY
 */
if ($_SERVER["SERVER_NAME"] == SITE["domain"]) {
    require __DIR__ . "/Minify.php";
}

/**
 * DATABASE CONNECT
 */
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => SITE["domain"],
    "port" => "3306",
    "dbname" => "eoq-site",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/**
 * SOCIAL CONFIG
 */
define("SOCIAL", [
    "facebook_page" => "DhyellTorres",
    "facebook_author" => "DhyellTorres",
    "facebook_appId" => "2217106915091235",
    "twitter_creator" => "@DhyellTorres",
    "twitter_site" => "@DhyellTorres"
]);

/**
 * MAIL CONNECT
 */
define("MAIL", [
    "host" => "smtp.sendgrid.net",
    "port" => "587",
    "user" => "apikey",
    "passwd" => "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",
    "from_name" => "É O Que?",
    "from_email" => "eoque@dhyell.com.br"
]);

/**
 * SOCIAL LOGIN: FACEBOOK
 */
define("FACEBOOK_LOGIN", [
    "clientId" => "4139479572801584",
    "clientSecret" => "b57025428b70e52278968646f24e44bb",
    "redirectUri" => SITE["root"] . "/facebook",
    "graphApiVersion" => "v11.0"
]);

/**
 * SOCIAL LOGIN: GOOGLE
 */
define("GOOGLE_LOGIN", [
    "clientId" => "1077830003268-sk5etcdfrqhoks7shdbf8jufnkpapj8m.apps.googleusercontent.com",
    "clientSecret" => "ok-okgiaFuR7tSPu8plAzkVs",
    "redirectUri" => SITE["root"] . "/google"
]);