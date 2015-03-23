<?php

namespace Spear\Silex\Persistence;

interface DTOHydrator
{
    public function enableExceptions();

    public function disableExceptions();

    public function hydrate(DataTransferObject $dto, array $dataset);
}
