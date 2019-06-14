<?php

namespace Thiagorb\Codeship\Contracts\Organizations\Projects\Builds;

use Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Steps\StepsList;

interface Steps
{
    public function read(): StepsList;
}
