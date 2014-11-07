<?php

// get articles and pass to view
$articles = getContainer()->getPostsRepository()->getArticles(2, true);

echo getContainer()->getTwig()->render('home.html.twig', [
    'articles' => $articles
]);
