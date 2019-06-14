<?php

return [
    'uuid' => ['type' => '?string'],
    'build_uuid' => ['type' => '?string'],
    'service_uuid' => ['type' => '?string'],
    'name' => ['type' => '?string'],
    'tag' => ['type' => '?string'],
    'type' => ['type' => '?string'],
    'status' => ['type' => '?string'],
    'updated_at' => ['type' => '?string'],
    'started_at' => ['type' => '?string'],
    'building_at' => ['type' => '?string'],
    'finished_at' => ['type' => '?string'],
    'steps' => ['type' => '?\Thiagorb\Codeship\Responses\Organizations\Projects\Builds\Steps\Step[]'],
    'command' => ['type' => '?string'],
    'image_name' => ['type' => '?string'],
    'registry' => ['type' => '?string'],
];
