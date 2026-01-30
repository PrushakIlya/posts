<?php

return function() {
    //need create env for constants!!!
    try {
        return new PDO(
            'mysql:host=mysql;port=3306;dbname=web_site',
            'root',
            'root'
        );
    } catch (PDOException $e) {
        throw new RuntimeException("Database connection failed: " . $e->getMessage());
    }
};
