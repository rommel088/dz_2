<?php
//namespace apps;

use \apps\modules\Howitzer;
use \apps\modules\SpCannon;


    router($_REQUEST);

    function router($request)
    {
        $loader = new Twig_Loader_Filesystem('apps/modules/templates');
        $twig = new Twig_Environment($loader);

        if (count($request) == 0) {
            echo $twig->render('index.html', array('name' => 'anonymous'));
        } else {
            echo $twig->render('index.html', array('name' => $request['name']));
        }
        return $request;
    }

//$loader = new Twig_Loader_String();
//$twig = new Twig_Environment($loader);
//
//echo $twig->render('Hello {{ name }}!', array('name' => 'Fabien'));

//$m30 = new Howitzer();
//$m30->setReloadTime(10);
//echo $m30->reload() . "<br />";
//echo $m30->makeAim() . "<br />";
//echo $m30->makeShot() . "<br />";
//
//$SU100 = new SpCannon();
//$SU100->setReloadTime(8);
//$SU100->setEngine(520);
//echo $SU100->moveTo("hill") . "<br />";
//echo $SU100->reload() . "<br />";
//echo $SU100->makeAim() . "<br />";
//echo $SU100->makeShot() . "<br />";