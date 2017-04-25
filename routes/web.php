<?php

$app->get('/', function () use ($app) {
    return 'Append an iTunes id to get an array of Overcast.fm episode slugs. Example: <a href="1169565091">Fits + Starts</a>. Repository: <a href="https://github.com/DanielCoulbourne/Overcast-Episode-Slug-Retriever">Github</a>';
});

$app->get('/{id}', 'ShowController@index');
