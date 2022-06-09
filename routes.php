<?php

use Leaf\App;

$app = new App;
$app->setNamespace('\App\Controllers');

// Routes pour les carrés
$app->get('/carre/area', 'CarresController@area');
$app->get('/carre/perimeter', 'CarresController@perimeter');

// Routes des rectangles
$app->get('/rectangle/area', 'RectanglesController@area');
$app->get('/rectangle/perimeter', 'RectanglesController@perimeter');

// Routes des triangles
$app->get('/triangle/area', 'TrianglesController@area');
$app->get('/triangle/perimeter', 'TrianglesController@perimeter');

$app->get('/disque/area', 'DisquesController@area');
$app->get('/disque/perimeter', 'DisquesController@perimeter');

$app->get('/couronne/area', 'CouronnesController@area');
$app->get('/couronne/perimeter', 'CouronnesController@perimeter');

$app->run();