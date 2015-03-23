<?php

namespace Blockos\Persistence\ValueTransformers;

use Blockos\Persistence\Field;

interface ValueTransformer
{
    public function convert(Field $field, $value);
}