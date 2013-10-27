<?php
namespace apps\modules;

use \lib\classes\BaseFunctions;
use \lib\interfaces\ServiceFunctions;

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