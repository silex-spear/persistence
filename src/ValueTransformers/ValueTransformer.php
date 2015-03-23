<?php

namespace Spear\Silex\Persistence\ValueTransformers;

use Spear\Silex\Persistence\Field;

interface ValueTransformer
{
    public function convert(Field $field, $value);
}