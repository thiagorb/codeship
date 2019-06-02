<?php

namespace Thiagorb\Codeship\Contracts\Organizations;

interface Organization
{
    public function projects(): Projects;
}
