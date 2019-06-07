<?php

namespace Thiagorb\Codeship\Contracts\Organizations\Projects;

interface Builds
{
    /**
     * @param string $ref
     * @param ?string $commitSha
     *
     * @return void
     */
    public function create(string $ref, ?string $commitSha = null);
}
