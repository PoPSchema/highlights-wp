<?php
namespace PoP\HighlightsWP\TypeAPIs;

use WP_Post;
use PoP\Highlights\TypeAPIs\HighlightTypeAPIInterface;
/**
 * Methods to interact with the Type, to be implemented by the underlying CMS
 */
class HighlightTypeAPI implements HighlightTypeAPIInterface
{
    /**
     * Indicates if the passed object is of type Highlight
     *
     * @param [type] $object
     * @return boolean
     */
    public function isInstanceOfHighlightType($object): bool
    {
        return ($object instanceof WP_Post) && $object->post_type == \POP_ADDHIGHLIGHTS_POSTTYPE_HIGHLIGHT;
    }
}
