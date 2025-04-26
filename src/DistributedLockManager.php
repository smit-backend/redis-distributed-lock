<?php

declare(strict_types=1);

namespace SmitBackend\RedLockShield;

use SmitBackend\RedLockShield\Contracts\LockDriverInterface;

/**
 * Class DistributedLockManager
 *
 * @package SmitBackend\RedLockShield
 */
class DistributedLockManager implements LockDriverInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
