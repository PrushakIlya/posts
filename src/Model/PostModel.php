<?php

declare(strict_types=1);

namespace App\Model;

class PostModel
{
    public function __construct(
        public int         $id,
        public string      $name,
        public string      $description,
        public string      $text,
        public string      $img_path,
        public int         $category_id,
        public int         $count_views,
        public string      $created_at,
        public string|null $deleted_at = null,
    ){
    }
}