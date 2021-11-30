<?php

declare(strict_types=1);

namespace CarAndClassic\LaravelFeatureFlags;

abstract class FeatureFlag implements Contracts\FeatureFlag
{
    public function __invoke(...$args): bool
    {
        return $this->enabled(...$args);
    }

    public function disabled(...$args): bool
    {
        return !$this->enabled(...$args);
    }
}
