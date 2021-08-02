<?php

/**
 * Undocumented function
 *
 * @param string $param
 * @return string
 */
function site(string $param = null): string
{
    if ($param && !empty(SITE[$param])) {
        return SITE[$param];
    }

    return SITE["root"];
}

/**
 * Undocumented function
 *
 * @param string $imageUrl
 * @return string
 */
function routeImage(string $imageUrl): string
{
    return "https://www.freepnglogos.com/pics/red-logo-png";
}

/**
 * Undocumented function
 *
 * @param string $path
 * @param boolean $time
 * @return string
 */
function asset(string $path, bool $time = true): string
{
    $file = SITE["root"] . "/views/assets/{$path}";
    $fileOnDir = dirname(__DIR__, 1) . "/views/assets/{$path}";
    if ($time && file_exists($fileOnDir)) {
        $file .= "?time=" . filemtime($fileOnDir);
    }
    return $file;
}

/**
 * Undocumented function
 *
 * @param string $path
 * @param boolean $time
 * @return string
 */
function imagePath(string $path, bool $time = true): string
{
    $file = SITE["root"] . "/views/assets/images/{$path}";
    $fileOnDir = dirname(__DIR__, 1) . "/views/assets/images/{$path}";
    if ($time && file_exists($fileOnDir)) {
        $file .= "?time=" . filemtime($fileOnDir);
    }
    return $file;
}

/**
 * Undocumented function
 *
 * @param string $type
 * @param string $message
 * @return string|null
 */
function flash(string $type = null, string $message = null): ?string
{
    if ($type && $message) {
        $_SESSION["flash"] = [
            "type" => $type,
            "message" => $message
        ];
        return null;
    }

    if (!empty($_SESSION["flash"]) && $flash = $_SESSION["flash"]) {
        unset($_SESSION["flash"]);
        return "<div class=\"message{$flash["type"]}\">{$flash["message"]}</div>";
    }

    return null;
}
