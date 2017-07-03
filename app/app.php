<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_result", function() use($app) {
        $my_PingPongGenerator = new PingPongGenerator;
        $ping_pong_result = $my_PingPongGenerator->generatePingPongArray($_GET['number']);
        return $app['twig']->render('pingpong.html.twig', array('result' => $ping_pong_result));
    });

    return $app;
?>
