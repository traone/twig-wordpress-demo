<?php

// Autoload project repositories and other classes
require_once dirname(__FILE__) . '/../../../../../vendor/autoload.php';


// Queue bootstrap css
add_action('wp_enqueue_scripts', function() {
    wp_register_script('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-css');
});


function getContainer()
{
    global $container;

    return $container;
}


$twigLoader = new Twig_Loader_Filesystem(__DIR__ . '/views');

$container = new MyCoolProject\Container(
    new MyCoolProject\Twig($twigLoader),
    new MyCoolProject\Repository\PostsRepository()
);

