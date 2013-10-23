<?php

function __autoload($name)
{
    require_once ("classes/".$name."_class.php");
}

$m30 = new Howitzer();
$m30->setReloadTime(10);
echo $m30->reload() . "<br />";
echo $m30->makeAim() . "<br />";
echo $m30->makeShot() . "<br />";

$SU100 = new SpCannon();
$SU100->setReloadTime(8);
$SU100->setEngine(520);
echo $SU100->moveTo("hill") . "<br />";
echo $SU100->reload() . "<br />";
echo $SU100->makeAim() . "<br />";
echo $SU100->makeShot() . "<br />";