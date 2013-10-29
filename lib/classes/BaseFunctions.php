<?php
namespace lib\classes;

abstract class BaseFunctions
{
    protected $reloadTime = 0;
    protected $isLoad = 0;
    protected $aim = 0;

    abstract public function reload();

    public function setReloadTime($time)
    {
        $this->reloadTime = $time;
    }

    public function makeShot()
    {
        if ($this->isLoad == 1){
            $this->isLoad == 0;
            return "piu-piu";
        } else {
            $this->reload();
            return "not loaded";
        }
    }

    public function makeAim()
    {
        $this->aim = 1;
        return 1;
    }

    public function getAim()
    {
        if ($this->aim) {
            return "target acquired";
        } else {
            return "no target";
        }
    }
}