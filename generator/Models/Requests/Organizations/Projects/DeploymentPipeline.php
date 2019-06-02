<?php

return [
    'id' => ['type' => '?int'],
    'branch' => ['type' => '?\Codeship\Organizations\Requests\Projects\Branch'],
    'config' => ['type' => '?\Codeship\Organizations\Requests\Projects\DeployPipelines\Config'],
    'position' => ['type' => '?int'],
    'createdAt' => ['type' => '?string'],
    'updatedAt' => ['type' => '?string'],
];