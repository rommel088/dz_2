<?php

use \apps\modules\Howitzer;
use \apps\modules\SpCannon;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$path = $request->getPathInfo();
$post = $request->request->all();

//типа роутер
if (in_array($path, array('', '/'))) {
    $content = showStartPage($post);
} elseif ($path == '/howitzer') {
    $content = showHowitzer($post);
} elseif ($path == '/spcannon') {
    $content =showSpCannon($post);
} else {
    $content = showStartPage($post);
}

//================================================================================
function showStartPage($request)
{
    $loader = new Twig_Loader_Filesystem('apps/modules/templates');
    $twig = new Twig_Environment($loader);
    return $twig->render('default.html', array('name' => 'anonymous'));
}

//================================================================================
function showHowitzer($request)
{
    $name = "";
    if (isset($request['name'])) {
        $name = $request['name'];
    }

    $loadTime = 0;
    if (isset($request['loadtime'])) {
        $loadTime = $request['loadtime'];
    }

    $howitzer = new Howitzer();

    $loader = new Twig_Loader_Filesystem('apps/modules/templates');
    $twig = new Twig_Environment($loader);

    $howitzer->setReloadTime($loadTime);

    $reload = "";
    if (isset($request['load']) && $request['load'] == 1) {
        $reload = $howitzer->reload();
    }

    if (isset($request['fire'])) {
        $howitzer->makeShot();
        $reload = "";
    }

    $aim = "";
    if (isset($request['aim']) && $request['aim'] == 1) {
        $howitzer->makeAim();
        $aim = $howitzer->getAim();
    }

    $content = $twig->render('howitzer.html', array('name' => $name,
                                                    'loadTime' => $loadTime,
                                                    'load' => $reload,
                                                    'aim' => $aim
                                                    ));

    return $content;
}

//================================================================================
function showSpCannon($request)
{
    $SPCannon = new SpCannon();
    $name = "";
    if (isset($request['name'])) {
        $name = $request['name'];
    }

    $loadTime = 0;
    if (isset($request['loadtime'])) {
        $loadTime = $request['loadtime'];
    }

    $position = "";
    if (isset($request['position'])) {
        $position = $SPCannon->moveTo($request['position']);
    }
    $loader = new Twig_Loader_Filesystem('apps/modules/templates');
    $twig = new Twig_Environment($loader);

    $SPCannon->setReloadTime($loadTime);

    $reload = "";
    if (isset($request['load']) && $request['load'] == 1) {
        $reload = $SPCannon->reload();
    }

    if (isset($request['fire'])) {
        $SPCannon->makeShot();
        $reload = "";
    }

    $aim = "";
    if (isset($request['aim']) && $request['aim'] == 1) {
        $SPCannon->makeAim();
        $aim = $SPCannon->getAim();
    }

    $content = $twig->render('spcannon.html', array('name' => $name,
                                                    'loadTime' => $loadTime,
                                                    'position' => $position,
                                                    'load' => $reload,
                                                    'aim' => $aim
                                                ));

    return $content;
}

//================================================================================

$loader = new Twig_Loader_Filesystem('apps/modules/templates');
$twig = new Twig_Environment($loader);


$response = new Response();
$response->setContent($twig->render('index.html', array('content' => $content)));
$response->setStatusCode(200);
$response->headers->set('Content-Type', 'text/html');

$response->send();

//да да, знаю, что говнокод :D