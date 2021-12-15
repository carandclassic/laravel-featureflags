<?php

declare(strict_types=1);

namespace CarAndClassic\LaravelFeatureFlags\Tests\Traits;


trait InteractsWithFeatures
{
    private function enableFeature(string $class): void
    {
        $this->mockFeatureResponse($class, true);
    }

    private function disableFeature(string $class): void
    {
        $this->mockFeatureResponse($class, false);
    }

    private function mockFeatureResponse(string $class, bool $value): void
    {
        $mock = $this->createMock($class);
        $mock->expects($this->any())
            ->method('enabled')
            ->withAnyParameters()
            ->willReturn($value);

        app()->instance($class, $mock);

    }
}