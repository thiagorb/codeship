<?php

return [
    'uuid' => ['type' => '?string'],
    'projectUuid' => ['type' => '?string'],
    'projectId' => ['type' => '?int'],
    'organizationUuid' => ['type' => '?string'],
    'ref' => ['type' => '?string'],
    'commitSha' => ['type' => '?string'],
    'status' => ['type' => '?string'],
    'username' => ['type' => '?string'],
    'commitMessage' => ['type' => '?string'],
    'finishedAt' => ['type' => '?string'],
    'allocatedAt' => ['type' => '?string'],
    'queuedAt' => ['type' => '?string'],
    'links' => ['type' => '?\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Links'],
    'branch' => ['type' => '?string'],
    'prNumber' => ['type' => '?string'],
];
