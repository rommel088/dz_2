<?php
namespace lib\interfaces;

interface SelfPropelled
{
    public function setEngine($hp);
    public function moveTo($position);
}