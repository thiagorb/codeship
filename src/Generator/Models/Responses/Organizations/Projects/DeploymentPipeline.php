<?php

return [
    'id' => ['type' => '?int'],
    'branch' => ['type' => '?\Codeship\Responses\Organizations\Projects\Branch'],
    'config' => ['type' => '?\Codeship\Responses\Organizations\Projects\DeployPipelines\Config'],
    'position' => ['type' => '?int'],
    'createdAt' => ['type' => '?string'],
    'updatedAt' => ['type' => '?string'],
];