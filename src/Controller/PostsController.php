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

        return $this->render("index.tpl", ['postsCategory' => $postsByCategory]);
    }
    public function posts(int $id): Response
    {
        $postRepository = new PostRepository();
        $post = $postRepository->getPostById($id);
        $samePosts = $postRepository->getSamePosts($post['category_id']);

        $postRepository->updateCountViewsById($id);

        return $this->render("post.tpl", ['post' => $post, 'same_posts' => $samePosts]);
    }

    public function postsCategories(int $id, Request $request): Response
    {
        $page = (int)$request->getQuery('page');
        $filter = $request->getQuery('filter');

        $postService = new PostsService();

        $filterArr = $postService->getFilter($filter);

        $postRepository = new PostRepository();

        [$posts, $count] = $postRepository->getPostByCategoryId(id: $id, page: $page, filter: $filterArr);

        return $this->render("posts.tpl", [
            'posts' => $posts,
            'category_id' => $id,
            'count' => $count,
            'page' => $page,
            'filter' => $filter,
        ]);
    }
}