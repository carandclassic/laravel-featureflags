<?php

declare(strict_types=1);

namespace CarAndClassic\LaravelFeatureFlags;

abstract class FeatureFlag implements Contracts\FeatureFlag
{
    /**
     * @param mixed ...$args
     * @return bool
     */
    public function __invoke(...$args): bool
    {
        return $this->enabled(...$args);
    }

    /**
     * @param mixed ...$args
     * @return bool
     */
    public function disabled(...$args): bool
    {
        return !$this->enabled(...$args);
    }
}
