<?php

namespace Blockos\Persistence\Fields;

use Blockos\Persistence\Field;
use Blockos\Persistence\FieldTypes;

class Raw implements Field
{
    private
        $namePath;

    public function __construct($namePath = array())
    {
        $this->namePath = $namePath;
        if(! is_array($namePath))
        {
            $this->namePath = array($namePath);
        }
    }

    public function getNamePath()
    {
        return $this->namePath;
    }

    public function convert($value)
    {
        return $value;
    }

    public function getPrintableNamePath()
    {
        return '[' . join('][', $this->namePath) . ']';
    }
    
    public function getType()
    {
        return FieldTypes::RAW;
    }
}
