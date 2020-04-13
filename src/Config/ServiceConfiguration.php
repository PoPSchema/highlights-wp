<?php

declare(strict_types=1);

namespace PoP\HighlightsWP\Config;

use PoP\Root\Component\PHPServiceConfigurationTrait;
use PoP\ComponentModel\Container\ContainerBuilderUtils;

class ServiceConfiguration
{
    use PHPServiceConfigurationTrait;

    protected static function configure()
    {
        ContainerBuilderUtils::injectValuesIntoService(
            'instance_manager',
            'overrideClass',
            \PoP\Highlights\TypeResolverPickers\Optional\HighlightContentEntityTypeResolverPicker::class,
            \PoP\HighlightsWP\TypeResolverPickers\Overrides\HighlightContentEntityTypeResolverPicker::class
        );
    }
}
