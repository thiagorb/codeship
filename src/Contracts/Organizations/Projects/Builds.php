<?php

namespace Thiagorb\Codeship\Contracts\Organizations\Projects;

use Thiagorb\Codeship\Contracts\Organizations\Projects\Builds\Build;
use Thiagorb\Codeship\Responses\Organizations\Projects\Builds\BuildsList;

interface Builds
{
    /**
     * @param string $ref
     * @param ?string $commitSha
     *
     * @return void
     */
    public function create(string $ref, ?string $commitSha = null);

    /**
     * @param int|null $perPage
     * @param int|null $page
     *
     * @return BuildsList
     */
    public function read(int $perPage = null, int $page = null): BuildsList;

    public function find(string $uuid): Build;
}
