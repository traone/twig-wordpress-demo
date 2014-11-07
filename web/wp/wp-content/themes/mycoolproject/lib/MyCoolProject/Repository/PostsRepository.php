<?php

namespace MyCoolProject\Repository;

/**
 * Class PostsRepository
 * @package MyCoolProject\Repository
 */
class PostsRepository
{

    const POST_TYPE_POST = 'post';

    /**
     * @param int $limit
     * @param bool $includeAuthorImages
     * @return array|bool|mixed
     */
    public function getArticles($limit = 5, $includeAuthorImages = false)
    {
        $cacheKey = md5('posts_' . $limit . $includeAuthorImages);

        if ($posts = get_transient($cacheKey)) {
            return $posts;
        }

        $args = [
            'post_type'      => self::POST_TYPE_POST,
            'posts_per_page' => $limit
        ];

        $query = new \WP_Query($args);

        if (!$query->have_posts()) {
            return false;
        }

        $posts = $query->get_posts();

        // do something important to your post objects
        if ($includeAuthorImages === true) {
            $posts = $this->mapAuthorImages($posts);
        }

        set_transient($cacheKey, $posts, HOUR_IN_SECONDS);

        return $posts;

    }

    /**
     * @param $articles
     * @return array
     */
    private function mapAuthorImages($articles)
    {
        $articles = array_map(function($article) {

            $article->author_image = get_avatar($article->post_author, 128);

            return $article;

        }, $articles);

        return $articles;

    }

}