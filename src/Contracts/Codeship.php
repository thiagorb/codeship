<?php

namespace Thiagorb\Codeship\Contracts;

interface Codeship
{
    public function accountOrganizations(): AccountOrganizations;

    public function organizations(): Organizations;
}
