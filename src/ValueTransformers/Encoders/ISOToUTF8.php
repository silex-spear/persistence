<?php

namespace Blockos\Persistence\ValueTransformers\Encoders;

use Blockos\Persistence\ValueTransformers\ValueTransformer;
use Blockos\Persistence\Field;
use Blockos\Persistence\FieldTypes;

class ISOToUTF8 implements ValueTransformer
{
    private
        $acceptTypes;

    public function __construct()
    {
        $this->acceptTypes = array(
            FieldTypes::STRING,
            FieldTypes::RAW,
        );
    }

    public function convert(Field $field, $value)
    {
        if(in_array($field->getType(), $this->acceptTypes))
        {
            return utf8_encode($value);
        }

        return $value;
    }
}