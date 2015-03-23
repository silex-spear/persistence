<?php

namespace Spear\Silex\Persistence\Fields;

use Spear\Silex\Persistence\Field;
use Spear\Silex\Persistence\FieldTypes;

class UnsignedInteger extends Integer implements Field
{
    public function __construct($namePath = array())
    {
        parent::__construct($namePath);

        $this->setMin(0);
    }

    public function setMin($value)
    {
        if (is_integer($value) && $value < 0)
        {
            $value = 0;
        }

        return parent::setMin($value);
    }
    
    public function getType()
    {
        return FieldTypes::INTEGER;
    }
}
