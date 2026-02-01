<?php

return new class {
    public function up(): string
    {
        return 'CREATE TABLE IF NOT EXISTS categories (
            id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(255) NOT NULL UNIQUE,
            description TEXT NOT NULL
        )';
    }

    public function down(): string
    {
        return 'DROP TABLE IF EXISTS categories';
    }
};