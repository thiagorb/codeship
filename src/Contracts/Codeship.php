<?php

namespace Codeship\Contracts;

interface Codeship
{
    public function accountOrganizations(): AccountOrganizations;

    public function organizations(): Organizations;
}
