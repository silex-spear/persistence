<?php

namespace Spear\Silex\Persistence\Exceptions;

class DTONotFoundException extends \Exception
{
    public function __construct($DTOName, $DTOId)
    {
        parent::__construct($DTOName .' n°' . $DTOId . ' not found.');
    }
}
