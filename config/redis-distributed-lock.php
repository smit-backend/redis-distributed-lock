<?php

return [
    'enabled' => env('REDIS_DISTRIBUTED_LOCK_ENABLED', true),
    'timeout' => env('REDIS_DISTRIBUTED_LOCK_TIMEOUT', 30),
    'log_channel' => env('REDIS_DISTRIBUTED_LOCK_LOG', 'stack'),
];
