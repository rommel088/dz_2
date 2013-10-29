<?php
namespace apps\modules;

use \lib\classes\BaseFunctions;
use \lib\interfaces\ServiceFunctions;

class Howitzer extends BaseFunctions implements ServiceFunctions {

    public function reload()
    {
        $this->isLoad = 1;
        return "shell loaded, charge loaded";
    }

    public function getLoad()
    {
        if ($this->isLoad) {
            return "loaded";
        } else {
            return "unloaded";
        }
    }

}