<?php

return [
    'notifier' => ['type' => '?string'],
    'target' => ['type' => '?string'],
    'branch' => ['type' => '?string'],
    'options' => ['type' => '\Thiagorb\Codeship\Responses\Organizations\Projects\NotificationRuleOption[]|null'],
    'buildStatuses' => ['type' => 'string[]|null'],
    'branchMatch' => ['type' => '?string'],
];