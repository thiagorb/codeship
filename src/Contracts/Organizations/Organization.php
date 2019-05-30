<?php

namespace Codeship\Contracts\Organizations;

interface Organization
{
    public function projects(): Projects;
}
