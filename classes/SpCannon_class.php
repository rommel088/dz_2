<?php

require_once("ServiceFunctions_interface.php");
require_once("SelfPropelled_interface.php");

class SpCannon extends BaseFunctions implements ServiceFunctions, SelfPropelled
{
    private $reloadtime;
    private $enginePower;

    public function setReloadTime($time)
    {
        $this->reloadtime = $time;
    }
    public function setEngine($hp)
    {
        $this->enginePower = $hp;
    }
    public function reload()
    {
        $this->isLoad = 1;
        return "shot loaded";
    }
    public function moveTo($position)
    {
        return "moving to ".$position." <br /> on position";
    }

}