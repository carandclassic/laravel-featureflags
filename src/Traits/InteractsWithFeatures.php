<?php

declare(strict_types=1);

namespace CarAndClassic\LaravelFeatureFlags\Traits;

use Illuminate\Support\Arr;

trait InteractsWithFeatures
{
    private function enableFeature(array|string $class): void
    {
        foreach (Arr::wrap($class) as $featureClass) {
            $this->mockFeatureResponse($featureClass, true);
        }
    }

    private function disableFeature(array|string $class): void
    {
        foreach (Arr::wrap($class) as $featureClass) {
            $this->mockFeatureResponse($featureClass, false);
        }
    }

    private function mockFeatureResponse(string $class, bool $value): void
    {
        app()->instance($class, $mock = $this->createMock($class));

        $mock->expects($this->any())
            ->method('enabled')
            ->withAnyParameters()
            ->willReturn($value);

        $mock->expects($this->any())
            ->method('disabled')
            ->withAnyParameters()
            ->willReturn(!$value);
    }
}
