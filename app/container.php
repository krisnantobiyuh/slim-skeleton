<?php
    $container = $app->getContainer();

// container Database Eloquent
$capsule = new Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

    $container['db'] = function($container){
        return $capsule;
    };


// ===================================


// container Twig Views
    $container['view'] = function($container){

    $setting = $container->get('settings')['view'];
    $view = new \Slim\Views\Twig($setting['path'], $setting['twig']);
        
    // Instantiate and add Slim specific extension
    $view->addExtension(new Slim\Views\TwigExtension(
        $container->router,
        $container->request->getUri()
    ));

    return $view;

  };

// ===================================
