<?php

return [
    'id' => ['type' => '?int'],
    'branch' => ['type' => '?\Thiagorb\Codeship\Organizations\Requests\Projects\Branch'],
    'config' => ['type' => '?\Thiagorb\Codeship\Organizations\Requests\Projects\DeployPipelines\Config'],
    'position' => ['type' => '?int'],
    'createdAt' => ['type' => '?string'],
    'updatedAt' => ['type' => '?string'],
];