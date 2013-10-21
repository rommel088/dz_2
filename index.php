<?php

function __autoload($name)
{
    require_once ("classes/".$name."_class.php");
}

$m30 = new Howitzer();
$m30->setReloadTime(10);
$m30->reload();
$m30->makeAim();
$m30->makeShot();

$SU100 = new SpCannon();
$SU100->setReloadTime(8);
$SU100->setEngine(520);
$SU100->moveTo("hill");
$SU100->reload();
$SU100->makeAim();
$SU100->makeShot();