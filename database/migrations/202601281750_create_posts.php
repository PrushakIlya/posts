<?php

return new class {
    public function up(): string
    {
        return 'CREATE TABLE IF NOT EXISTS posts (
            id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name TEXT NOT NULL,
            description TEXT NOT NULL,
            text TEXT NOT NULL,
            img_path TEXT NOT NULL,
            category_id INTEGER UNSIGNED NOT NULL,
            count_views INTEGER DEFAULT 0,
            publication_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY(category_id) REFERENCES categories(id) ON DELETE CASCADE
        )';

    }

    public function down(): string
    {
        return 'DROP TABLE IF EXISTS posts';
    }
};