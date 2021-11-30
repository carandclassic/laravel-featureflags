<?php

declare(strict_types=1);

namespace CarAndClassic\LaravelFeatureFlags\Contracts;

interface FeatureFlag
{
    /**
     * @param mixed ...$args
     * @return bool
     */
    public function enabled(...$args): bool;
}
