<?php

abstract class BaseFunctions {

    var $is_load = 0;

    abstract function reload();

    function makeShot()
    {
        if ($this->is_load == 1){
            echo "piu-piu <br />";
        } else {
            echo "not loaded <br />";
            $this->reload();
        }
    }

    function makeAim()
    {
        echo "target acquired <br />";
    }
}