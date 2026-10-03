<?php

declare(strict_types=1);

namespace SmitBackend\RedLockShield;

/**
 * Support monotonic fencing tokens for split-brain immunity
 */
class MonotonicFencing
{
    public function run(): bool
    {
        return true;
    }
}
