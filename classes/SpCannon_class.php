<?php

require_once("BaseFunctions_class.php");
require_once("ServiceFunctions_interface.php");
require_once("SelfPropelled_interface.php");

class SpCannon extends BaseFunctions implements ServiceFunctions, SelfPropelled
{
    var $reloadtime;
    var $engine_power;


    public function setReloadTime($time)
    {
        $this->reloadtime = $time;
    }
    public function setEngine($hp)
    {
        $this->engine_power = $hp;
    }
    public function reload()
    {
        echo "shot loaded <br />";
        $this->is_load = 1;
    }
    public function moveTo($position)
    {
        echo "moving to ".$position." <br />";
        echo "on position <br />";
    }


}