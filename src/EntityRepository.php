<?php

declare(strict_types=1);

namespace App;

class EntityRepository
{
    private static \PDO $conn;

    public function __construct()
    {
        self::$conn = (include '../config/connect_db.php')();
    }

    public static function getConn(): \PDO
    {
        return self::$conn;
    }
}
