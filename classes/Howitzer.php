<?php

require_once("ServiceFunctions.php");

class Howitzer extends BaseFunctions implements ServiceFunctions {

    private $reloadtime;

    public function setReloadTime($time)
    {
        $this->reloadtime = $time;
    }

    public function reload()
    {
        $this->isLoad = 1;
        return "shell loaded <br />charge loaded";
    }


}