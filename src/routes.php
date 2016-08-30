<?php

$app->get('/berichten/{jaar}/{maand}/{dag}', 'App\Controller\BerichtenController:index');
$app->get('/berichten/{id}', 'App\Controller\BerichtenController:get');

$app->get('/haltes', 'App\Controller\HaltesController:index');
$app->get('/haltes/{id}', 'App\Controller\HaltesController:index');

$app->get('/parkeerplaatsen', 'App\Controller\ParkeerController:index');
$app->get('/parkeerplaatsen/{id}', 'App\Controller\ParkeerController:index');