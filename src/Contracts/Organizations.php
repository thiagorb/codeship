<?php

namespace Codeship\Contracts;

use Codeship\Contracts\Organizations\Organization;

interface Organizations
{
    public function find(string $uuid): Organization;
}
