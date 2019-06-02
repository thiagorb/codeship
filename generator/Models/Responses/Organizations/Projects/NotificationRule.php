<?php

return [
    'notifier' => ['type' => '?string'],
    'target' => ['type' => '?string'],
    'branch' => ['type' => '?string'],
    'options' => ['type' => '?\Codeship\Responses\Organizations\Projects\NotificationRuleOption[]'],
    'buildStatuses' => ['type' => '?string[]'],
    'branchMatch' => ['type' => '?string'],
];