<?php

namespace Spear\Silex\Persistence\DTOHydrators;

use Spear\Silex\Persistence\ValueTransformers\ValueTransformer;
use Spear\Silex\Persistence\Field;
use Spear\Silex\Persistence\FieldTypes;

class UppercaseTransformer implements ValueTransformer
{
    public function convert(Field $field, $value)
    {
        if($field->getType() === FieldTypes::STRING)
        {
            return strtoupper($value);
        }

        return $value;
    }
}

class LeetTransformer implements ValueTransformer
{
    public function convert(Field $field, $value)
    {
        if($field->getType() === FieldTypes::STRING)
        {
            return str_replace(array('A', 'E', 'I', 'L', 'T'), array(4, 3, 1, 1, 7), $value);
        }

        return $value;
    }
}

class OppositeNumberTransformer implements ValueTransformer
{
    public function convert(Field $field, $value)
    {
        if($field->getType() === FieldTypes::INTEGER)
        {
            return $value * -1;
        }

        return $value;
    }
}
