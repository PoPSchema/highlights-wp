<?php

declare(strict_types=1);

namespace PoP\HighlightsWP\Config;

use PoP\Root\Component\PHPServiceConfigurationTrait;
use PoP\ComponentModel\Container\ContainerBuilderUtils;

class ServiceConfiguration
{
    use PHPServiceConfigurationTrait;

    protected static function configure(): void
    {
        ContainerBuilderUtils::injectValuesIntoService(
            'instance_manager',
            'overrideClass',
            \PoP\Highlights\TypeResolverPickers\Optional\HighlightCustomPostTypeResolverPicker::class,
            \PoP\HighlightsWP\TypeResolverPickers\Overrides\HighlightCustomPostTypeResolverPicker::class
        );
    }
}
