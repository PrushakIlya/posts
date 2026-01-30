<?php

return function() {
    try {
        return new PDO(
            'mysql:host=' . MYSQL_HOST . ';port=' . MYSQL_PORT . ';dbname=' . MYSQL_DBNAME,
            MYSQL_USERNAME,
            MYSQL_PASSWORD
        );
    } catch (PDOException $e) {
        throw new RuntimeException("Database connection failed: " . $e->getMessage());
    }
};
