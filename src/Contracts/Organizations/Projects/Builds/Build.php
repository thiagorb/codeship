<?php

namespace Thiagorb\Codeship\Contracts\Organizations\Projects\Builds;

use Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Read;

interface Build
{
    public function read(): Read;

    public function pipelines(): Pipelines;
}
