<?php

namespace Codeship\Contracts;

use Codeship\Responses\Organizations\Organization;

interface AccountOrganizations
{
    /**
     * @return Organization[]
     */
    public function read(): array;
}
