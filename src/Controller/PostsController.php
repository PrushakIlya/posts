<?php

namespace App\Controller;

use App\Repository\PostRepository;
use App\Services\PostsService;
use Prushak\Framework\Controller\AbstractController;
use Prushak\Framework\Http\Request;
use Prushak\Framework\Http\Response;

class PostsController extends AbstractController
{
    public function index(): Response
    {
        $postRepository = new PostRepository();
        $posts = $postRepository->getLastPosts();

        $postsByCategory = [];

        foreach ($posts as $post) {
            $postsByCategory[$post['category_name'] . '_' . $post['category_id']][] = $post;
        }

        return $this->render("pages/home.tpl", ['postsCategory' => $postsByCategory]);
    }
    public function show(string $id): Response
    {
        $postRepository = new PostRepository();
        $post = $postRepository->getPostById((int)$id);

        $samePosts = [];

        if (!empty($post)) {
            $postService = new PostsService();
            $samePosts = $postService->getSamePosts($postRepository, $post['category_id']);

            $postRepository->updateCountViewsById((int)$id);
        }

        return $this->render("pages/posts/show.tpl", ['post' => $post, 'same_posts' => $samePosts]);
    }

    public function posts(string $id, Request $request): Response
    {
        $page = empty((int)$request->getQuery('page')) ? 1 : (int)$request->getQuery('page');

        $filter = $request->getQuery('filter');

        $postService = new PostsService();

        $filterArr = $postService->getFilter($filter);

        $postRepository = new PostRepository();

        $countPosts = $postRepository->getPostsCountByCategoryId((int)$id);

        $posts = [];

        if (!empty($countPosts)) {
            $posts = $postRepository->getPostByCategoryId(id: (int)$id, page: $page, filter: $filterArr);
        }

        return $this->render("pages/categories/posts.tpl", [
            'posts' => $posts,
            'category_id' => (int)$id,
            'count' => $countPosts,
            'page' => $page,
            'filter' => $filter ?? 'default',
        ]);
    }
}