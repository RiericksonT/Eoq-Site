<?php

/**
 * CSS
 */
$minCss = new \MatthiasMullie\Minify\CSS();
$minCss->add(dirname(__DIR__, 1) . "/views/assets/style/footer.css");
$minCss->add(dirname(__DIR__, 1) . "/views/assets/style/header.css");
$minCss->add(dirname(__DIR__, 1) . "/views/assets/style/body.css");
$minCss->add(dirname(__DIR__, 1) . "/views/assets/style/home.css");
$minCss->add(dirname(__DIR__, 1) . "/views/assets/style/homePage.css");
$minCss->add(dirname(__DIR__, 1) . "/views/assets/style/profilePage.css");
$minCss->add(dirname(__DIR__, 1) . "/views/assets/style/subscribePage.css");
$minCss->minify(dirname(__DIR__, 1) . "/views/assets/style.min.css");

/**
 * JS
 */
$minJs = new \MatthiasMullie\Minify\JS();
$minJs->add(dirname(__DIR__, 1) . "/views/assets/js/jquery.js");
$minJs->add(dirname(__DIR__, 1) . "/views/assets/js/jquery-ui.js");
$minJs->minify(dirname(__DIR__, 1) . "/views/assets/scripts.min.js");
