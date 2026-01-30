<?php

declare(strict_types=1);

return new class {
    function run($dbConnect): void
    {
        $categories = [
            [
                'name' => 'Smartphones',
                'description' => 'Mobile phones with touchscreen, powerful processor, and multiple features'
            ],
            [
                'name' => 'Laptops',
                'description' => 'Portable computers for work and entertainment anywhere'
            ],
            [
                'name' => 'Televisions',
                'description' => 'Devices for watching TV shows, movies, and games with high image quality'
            ],
            [
                'name' => 'Gaming Consoles',
                'description' => 'Specialized devices for video games with high performance'
            ],
            [
                'name' => 'Smart Watches',
                'description' => 'Wearable devices with phone functions, fitness tracker, and notifications'
            ],
            [
                'name' => 'Tablets',
                'description' => 'Portable computers with touchscreen, between smartphones and laptops'
            ],
            [
                'name' => 'Cameras',
                'description' => 'Devices for taking photos and videos with various features and quality'
            ],
            [
                'name' => 'Headphones',
                'description' => 'Audio devices for listening to music and calls with high sound quality'
            ],
            [
                'name' => 'Robot Vacuum Cleaners',
                'description' => 'Automatic devices for cleaning rooms without human intervention'
            ],
            [
                'name' => 'Smart Speakers',
                'description' => 'Audio devices with voice assistant for smart home control and music playback'
            ]
        ];

        $stmt = $dbConnect->prepare('INSERT IGNORE INTO categories (name, description) VALUES (?, ?)');

        foreach ($categories as $category) {
            $stmt->execute([$category['name'], $category['description']]);
        }
    }
};