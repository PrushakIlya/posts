<?php

namespace App\Services;

class PostsService
{
    const FILTERS = [
        'view_up' => ['field' => 'count_views', 'sort' => 'DESC'],
        'view_down' => ['field' => 'count_views', 'sort' => 'ASC'],
        'publication_up' => ['field' => 'publication_date', 'sort' => 'DESC'],
        'publication_down' => ['field' => 'publication_date', 'sort' => 'ASC'],
    ];

    public function getFilter(string $filter): object|null
    {
        if (array_key_exists($filter, self::FILTERS)) {
            $values = self::FILTERS[$filter];

            return (object)['field' => $values['field'], 'sort' => $values['sort']];
        }

        return null;
    }
}