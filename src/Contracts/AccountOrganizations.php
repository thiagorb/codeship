<?php

namespace Thiagorb\Codeship\Contracts;

use Thiagorb\Codeship\Responses\Organizations\Organization;

interface AccountOrganizations
{
    /**
     * @return Organization[]
     */
    public function read(): array;
}
