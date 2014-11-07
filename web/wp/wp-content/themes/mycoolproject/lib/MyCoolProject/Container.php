<?php
/**
 * Created by PhpStorm.
 * User: henryk
 * Date: 7.11.14
 * Time: 11:45
 */

namespace MyCoolProject;


class Container {

    /**
     * @var \Twig_Environment
     */
    private $twig;

    /**
     * @var Repository\PostsRepository
     */
    private $postsRepository;


    public function __construct(
        \Twig_Environment $twig,
        \MyCoolProject\Repository\PostsRepository $postsRepository
    )
    {
        $this->twig = $twig;
        $this->postsRepository = $postsRepository;
    }

    /**
     * @return \Twig_Environment
     */
    public function getTwig()
    {
        return $this->twig;
    }

    /**
     * @return Repository\PostsRepository
     */
    public function getPostsRepository()
    {
        return $this->postsRepository;
    }

} 