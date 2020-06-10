<?php

declare(strict_types=1);

namespace PoP\HighlightsWP\TypeResolverPickers\Overrides;

use PoP\ContentWP\TypeResolverPickers\ContentEntityTypeResolverPickerInterface;
use PoP\PostsWP\TypeResolverPickers\NoCastContentEntityTypeResolverPickerTrait;

class HighlightContentEntityTypeResolverPicker extends \PoP\Highlights\TypeResolverPickers\Optional\HighlightContentEntityTypeResolverPicker implements ContentEntityTypeResolverPickerInterface
{
    use NoCastContentEntityTypeResolverPickerTrait;

    public function getPostType(): string
    {
        return \POP_ADDHIGHLIGHTS_POSTTYPE_HIGHLIGHT;
    }
}
