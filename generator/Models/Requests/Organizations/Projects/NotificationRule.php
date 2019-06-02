<?php

return [
    'notifier' => ['type' => '?string'],
    'target' => ['type' => '?string'],
    'branch' => ['type' => '?string'],
    'options' => ['type' => '?\Thiagorb\Codeship\Requests\Organizations\Projects\NotificationRuleOption[]'],
    'buildStatuses' => ['type' => '?string[]'],
    'branchMatch' => ['type' => '?string'],
];