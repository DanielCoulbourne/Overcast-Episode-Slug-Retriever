<?php

$app->get('/', function () use ($app) {
    return 'Append an iTunes id to get an array of episode slugs. Example: <a href="1169565091">Fits + Starts</a>';
});

$app->get('/{id}', 'ShowController@index');
