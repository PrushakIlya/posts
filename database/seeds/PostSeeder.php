<?php

declare(strict_types=1);

return new class {
    function run($dbConnect): void
    {
        $stmt = $dbConnect->prepare('INSERT IGNORE INTO posts (name, description, text, img_path, category_id, count_views, publication_date) VALUES (?, ?, ?, ?, ?, ?, ?)');

        $this->getImages();

        for ($i = 0; $i < 100; $i++) {
            $stmt->execute([
                $this->generateRandomString(10),
                $this->generateRandomString(100),
                $this->generateRandomString(200),
                $this->getImages()[array_rand($this->getImages())],
                mt_rand(1, 10),
                mt_rand(1, 20),
                date("Y-m-d H:i:s", mt_rand(1262055681, 1769713379))
            ]);
        }
    }

    function generateRandomString($length = 10)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }

        return $randomString;
    }

    function getImages()
    {
        $dir = $_SERVER['PWD'] . '/public/images';

        $files = scandir($dir);

        unset($files[0], $files[1]);

        return array_reverse($files);
    }
};