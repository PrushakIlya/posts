<?php

return [
    ['GET', '/', [App\Controller\PostsController::class, 'index']],
    ['GET', '/posts/[0-9]', [App\Controller\PostsController::class, 'posts']],
    ['GET', '/posts_categories/[0-9]', [App\Controller\PostsController::class, 'postsCategories']] // need to do /posts/category/[0-9]
];