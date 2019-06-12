<?php

return [
    'uuid' => ['type' => '?string'],
    'buildUuid' => ['type' => '?string'],
    'type' => ['type' => '?string'],
    'status' => ['type' => '?string'],
    'createdAt' => ['type' => '?string'],
    'updatedAt' => ['type' => '?string'],
    'finishedAt' => ['type' => '?string'],
    'metrics' => ['type' => '?\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Pipelines\Metrics'],
];
