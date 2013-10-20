<?php
require_once("classes/Howitzer_class.php");

$m30 = new Howitzer();
$m30->setReloadTime(10);
$m30->reload();
$m30->makeAim();
$m30->makeShot();