<?php

declare(strict_types=1);

namespace PoP\HighlightsWP\TypeResolverPickers\Overrides;

use PoP\CustomPostsWP\TypeResolverPickers\CustomPostTypeResolverPickerInterface;
use PoP\PostsWP\TypeResolverPickers\NoCastCustomPostTypeResolverPickerTrait;

class HighlightCustomPostTypeResolverPicker extends \PoP\Highlights\TypeResolverPickers\Optional\HighlightCustomPostTypeResolverPicker implements CustomPostTypeResolverPickerInterface
{
    use NoCastCustomPostTypeResolverPickerTrait;

    public function getCustomPostType(): string
    {
        return \POP_ADDHIGHLIGHTS_POSTTYPE_HIGHLIGHT;
    }
}
