<?php

declare(strict_types=1);

namespace CarAndClassic\LaravelFeatureFlags\Contracts;

interface FeatureFlag
{
    public function enabled(...$args): bool;
}
