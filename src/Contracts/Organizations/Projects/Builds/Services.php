<?php

namespace Thiagorb\Codeship\Contracts\Organizations\Projects\Builds;

use Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Services\ServicesList;

interface Services
{
    public function read(): ServicesList;
}
