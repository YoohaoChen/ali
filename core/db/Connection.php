<?php
/**
 * Created by PhpStorm.
 * User: yoohao
 * Date: 2017/2/21
 * Time: 14:09
 */

namespace ali\db;

use PDO;


class Connection extends PDO
{

    public static $pdo;
    public $dsn = 'mysql:host=localhost;dbname=bbs';
    public $username = 'bbs';
    public $password = 'bbs';

    public function __construct()
    {
        parent::__construct($this->dsn, $this->username, $this->password);
   }

    public static function getConnection()
    {
        if (self::$pdo) {
            return self::$pdo;
        } else {
            self::$pdo = new Connection();
            return self::$pdo;
        }
    }

    public function open()
    {
        //
    }
    public function close()
    {
        //
    }

}