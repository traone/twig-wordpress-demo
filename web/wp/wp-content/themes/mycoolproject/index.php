<?php

// get articles and pass to view
$articles = getContainer()->getPostsRepository()->getArticles(12, true);

echo getContainer()->getTwig()->render('page/home.html.twig', [
    'articles' => $articles
]);
