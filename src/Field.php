<?php

namespace Blockos\Persistence;

interface Field
{
    public function getNamePath();

    public function convert($value);

    public function getPrintableNamePath();
    
    public function getType();
}
