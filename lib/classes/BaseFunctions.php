<?php
namespace lib\classes;

abstract class BaseFunctions
{

    protected $isLoad = 0;

    abstract public function reload();

    public function makeShot()
    {
        if ($this->isLoad == 1){
            return "piu-piu";
        } else {
            $this->reload();
            return "not loaded";
        }
    }

    public function makeAim()
    {
        return "target acquired";
    }
}