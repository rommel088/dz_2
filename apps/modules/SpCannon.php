<?php
namespace apps\modules;

use \lib\classes\BaseFunctions;
use \lib\interfaces\ServiceFunctions;
use \lib\interfaces\SelfPropelled;


class SpCannon extends BaseFunctions implements ServiceFunctions, SelfPropelled
{
    private $enginePower = 0;
    private $position;

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
        $this->position = $position;
        if ($position == "") return false;
        return $this->position;
    }

}