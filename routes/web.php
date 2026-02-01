<?php

return [
    ['GET', '/', [App\Controller\PostsController::class, 'index']],
    ['GET', '/posts/[0-9]', [App\Controller\PostsController::class, 'show']],
    ['GET', '/categories/[0-9]/posts', [App\Controller\PostsController::class, 'posts']]
];