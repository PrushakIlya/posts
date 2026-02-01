<?php

declare(strict_types=1);

namespace App\Repository;

use App\AbstractRepository;

class PostRepository extends AbstractRepository
{
    public function getLastPosts(int $count = 3): array
    {
        $sql = '
            SELECT
                category_id,
                category_name,
                post_name,
                description,
                publication_date,
                img_path,
                count_views,
                id
            FROM (
                 SELECT
                     categories.name AS category_name,
                     categories.id AS category_id,
                     posts.name AS post_name,
                     posts.description,
                     posts.publication_date,
                     posts.img_path,
                     posts.count_views,
                     posts.id,
                     (row_number() over (PARTITION BY posts.category_id ORDER BY posts.publication_date DESC)) AS row_n
                 FROM posts
                 JOIN categories ON posts.category_id = categories.id
             ) AS temp
            WHERE temp.row_n < :count + 1
        ';

        return $this->fetchAll($sql, ['count' => $count]);
    }

    public function getPostById(int $id): array
    {
        $sql = '
            SELECT
                name,
                text,
                img_path,
                count_views,
                publication_date,
                category_id
            FROM posts
            where id = :id
        ';

        return $this->fetch($sql, ['id' => $id]);
    }

    public function getSamePosts(int $categoryId): array
    {
        $sql = '
            SELECT
                name,
                description,
                publication_date,
                img_path,
                count_views,
                id
            FROM posts
            WHERE category_id = :categoryId
            ORDER BY publication_date DESC
            LIMIT 20
            OFFSET 1
        ';

        return $this->fetchAll($sql, ['categoryId' => $categoryId]);
    }

    public function getPostsCountByCategoryId(int $id)
    {
        $sql = 'select count(*) from posts where category_id = :id';

        return $this->fetch($sql, ['id' => $id], \PDO::FETCH_COLUMN);
    }

    public function getPostByCategoryId(int $id, int $page = 1, int $limit = 9, object $filter = null): array
    {
        $sql = '
            SELECT
                name,
                description,
                publication_date,
                img_path,
                count_views,
                id
            FROM posts
            WHERE category_id = :id 
        ';

        if ($filter) {
            $sql .= 'ORDER BY ' . $filter->field . ' ' . $filter->sort . ' ';
        } else {
            $sql .= 'ORDER BY publication_date DESC ';
        }

        $sql .= 'LIMIT ' . $limit . ' OFFSET ' . ($page - 1) * $limit;

        return $this->fetchAll($sql, ['id' => $id]);
    }

    public function updateCountViewsById(int $id): void
    {
        $sql = 'UPDATE posts SET count_views = count_views + 1 WHERE id = :id';

        $this->execute($sql, ['id' => $id]);
    }
}