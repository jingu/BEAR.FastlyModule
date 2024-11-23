# BEAR.FastlyModule

> There are only two hard things in Computer Science: cache invalidation and naming things.
>
> – Phil Karlton

Fastly CDN integration module for BEAR.Sunday

## Example

```php
use BEAR\FastlyModule\FastlyEnableSoftPurgeModule;
use BEAR\FastlyModule\FastlyPurgeModule;

// Set API key and service ID
$this->install(new FastlyPurgeModule(
    $fastlyApiKey,
    $fastlyServiceId
));

// Enable soft purge
$this->install(new FastlyEnableSoftPurgeModule());
```
See more at https://bearsunday.github.io/manuals/1.0/ja/cache.html
