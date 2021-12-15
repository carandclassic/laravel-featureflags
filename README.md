# laravel-featureflags
Simple Feature Flag


## Testing
You can use the `InteractsWithFeatures` helper trait to make mocking of FeatureFlags easier in your tests.

```php
    $this->enableFeature(MyFeatureClass::class);
    $this->disableFeature(MyFeatureClass::class);
```