<?php

declare(strict_types=1);

namespace SmitBackend\RedLockShield\Contracts;

/**
 * Interface LockDriverInterface
 *
 * @package SmitBackend\RedLockShield
 */
interface LockDriverInterface
{
    public function execute(array $payload = []): mixed;
}
