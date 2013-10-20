<?php

require_once("BaseFunctions_class.php");
require_once("ServiceFunctions_interface.php");

class Howitzer extends BaseFunctions implements ServiceFunctions {

    var $reloadtime;

    public function setReloadTime($time)
    {
        $this->reloadtime = $time;
    }

    public function reload()
    {
        echo "shell loaded <br />";
        echo "charge loaded <br />";
        $this->is_load = 1;
    }


}