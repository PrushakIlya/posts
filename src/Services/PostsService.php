<?php

namespace App\Services;

use App\Repository\PostRepository;

class PostsService
{
    const FILTERS = [
        'view_up' => ['field' => 'count_views', 'sort' => 'DESC'],
        'view_down' => ['field' => 'count_views', 'sort' => 'ASC'],
        'publication_up' => ['field' => 'publication_date', 'sort' => 'DESC'],
        'publication_down' => ['field' => 'publication_date', 'sort' => 'ASC'],
    ];

    public function getFilter(string|null $filter): object
    {
        if (array_key_exists($filter, self::FILTERS)) {
            $values = self::FILTERS[$filter];

            return (object)['field' => $values['field'], 'sort' => $values['sort']];
        }

        return (object)self::FILTERS['publication_up'];
    }

    public function getSamePosts(PostRepository $postRepository, int $category_id): array
    {
        $arrPosts = $postRepository->getSamePosts($category_id);
        $ids = array_rand($arrPosts, 3);

        return array_map(fn($key) => $arrPosts[$key], $ids);
    }
}