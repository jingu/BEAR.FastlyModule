<?php

declare(strict_types=1);

namespace BEAR\FastlyModule;

use Attribute;
use Ray\Di\Di\Qualifier;

#[Attribute(Attribute::TARGET_PARAMETER), Qualifier]
final class FastlyApi
{
    public function __construct()
    {
    }
}
