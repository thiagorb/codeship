<?php

return [
    'id' => ['type' => '?int'],
    'branch' => ['type' => '?string'],
    'matchMode' => ['type' => '?string'],
    'config' => ['type' => '?\Thiagorb\Codeship\Responses\Organizations\Projects\DeployPipelines\Config[]'],
    'position' => ['type' => '?int'],
    'createdAt' => ['type' => '?string'],
    'updatedAt' => ['type' => '?string'],
];