<?php
// write routes
$app->get('/',function($request, $response){
    // Creating your routing
});

$app->get('/home','App\Controllers\HomeController:home');
