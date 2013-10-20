<?php

require_once("BaseFunctions_class.php");
require_once("ServiceFunctions_interface.php");

class Howitzer extends BaseFunctions implements ServiceFunctions {

    var $reloadtime;

    public function setReloadTime()
    {
        $this->reloadtime = 120;
    }

    public function reload()
    {
        echo "charge loaded";
        echo "shell loaded";
        $this->is_load = 1;
    }


}