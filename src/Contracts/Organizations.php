<?php

namespace Thiagorb\Codeship\Contracts;

use Thiagorb\Codeship\Contracts\Organizations\Organization;

interface Organizations
{
    public function find(string $uuid): Organization;
}
