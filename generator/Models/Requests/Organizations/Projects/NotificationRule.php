<?php

return [
    'notifier' => ['type' => '?string'],
    'target' => ['type' => '?string'],
    'branch' => ['type' => '?string'],
    'options' => ['type' => '\Thiagorb\Codeship\Requests\Organizations\Projects\NotificationRuleOption[]|null'],
    'buildStatuses' => ['type' => 'string[]|null'],
    'branchMatch' => ['type' => '?string'],
];