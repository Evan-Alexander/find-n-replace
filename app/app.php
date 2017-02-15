<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/FindAndReplace.php";

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    session_start();
    if (empty($_SESSION['game'])) {
        $_SESSION['game'] = array();
    }


    $app->get("/", function() use ($app){
        return $app['twig']->render('form.html.twig');
    });

    $app->post("/view_results", function() use ($app) {
        
    });

    return $app;
