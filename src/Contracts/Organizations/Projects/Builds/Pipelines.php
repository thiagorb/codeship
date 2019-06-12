<?php

namespace Thiagorb\Codeship\Contracts\Organizations\Projects\Builds;

use Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Pipelines\PipelinesList;

interface Pipelines
{
    public function read(): PipelinesList;
}
