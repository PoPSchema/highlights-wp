<?php

declare(strict_types=1);

namespace PoPSchema\HighlightsWP\Config;

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
            \PoPSchema\Highlights\TypeResolverPickers\Optional\HighlightCustomPostTypeResolverPicker::class,
            \PoPSchema\HighlightsWP\TypeResolverPickers\Overrides\HighlightCustomPostTypeResolverPicker::class
        );
    }
}
