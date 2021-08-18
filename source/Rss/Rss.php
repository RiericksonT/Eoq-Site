<?php

namespace Source\Rss;

use PDO;
use mysqli;

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

class Rss
{
    /**@var mixed */
    private static $conexao = null;
    /**@var mixed */
    public static $qr = null;
    /**@var mixed */
    private static $sql = "SELECT `post`.*, `users`.`photo`, `users`.`first_name`, `users`.`last_name`, (SELECT CONCAT('[', GROUP_CONCAT(JSON_OBJECT('first_name',`users`.`first_name`, 'last_name',`users`.`last_name`,'comment',`comment_post`.`comment`)), ']') FROM `comment_post` INNER JOIN `users` ON `users`.`id` = `comment_post`.`id_users` WHERE `id_post`= `post`.`id`) as `comments` FROM `post`, `users` WHERE `post`.`id_users` = `users`.`id`;";

    public static function getPost()
    {
        $qr = Rss::execute(
            self::$sql,
        );
        if ($qr->count() > 0) {
            $posts = $qr->generico()->fetchAll(PDO::FETCH_ASSOC);
            foreach ($posts as $index => $post) {
                ob_start();
                $html_post = ob_get_contents();
                ob_end_clean();
                $posts[$index]['html'] = $html_post;
            }
            return $posts;
        }
    }

    public static function execute($sql, $bp = '')
    {
        if (self::connect()) {
            Rss::$qr = self::$conexao->prepare($sql);
            if (is_array($bp)) {
                foreach ($bp as $name => $param) {
                    $name += 1;
                    Rss::$qr->bindValue($name, $param);
                }
            }
            Rss::$qr->execute();
            Rss::$qr = Rss::$qr;
            return new self;
        }
    }

    private static function connect()
    {
        if (self::$conexao != null) {
            return true;
        } else {
            try {
                self::$conexao = new \PDO('mysql:host=' . DATA_LAYER_CONFIG['host'] . ';charset=utf8;dbname=' . DATA_LAYER_CONFIG['dbname'], DATA_LAYER_CONFIG['username'], DATA_LAYER_CONFIG['passwd']);
                return self::$conexao;
            } catch (\PDOException $e) {
                echo "<p>Erro ao conectar no banco de dados: <b>" . $e->getMessage() . "</b></p>";
                return false;
            }
        }
    }

    public static function session($texto)
    {
        if (isset($_SESSION[$texto])) {
            return Rss::antisql($_SESSION[$texto]);
        } else {
            return false;
        }
    }

    public static function antisql($texto)
    {
        return htmlspecialchars(str_replace([
            "'",
            "\\",
            ";",
            "="
        ], '', $texto));
    }

    public function count()
    {
        return Rss::$qr->rowCount();
    }

    public function generico()
    {
        return Rss::$qr;
    }
}
