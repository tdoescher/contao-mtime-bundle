<?php

namespace tdoescher\MtimeBundle\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Environment;

/**
 * @Hook("replaceInsertTags")
 */
class ReplaceInsertTagsListener
{
    public function __invoke(string $tag)
    {
        $list = explode('::', $tag);
        $tag = $list[0];
        $file = isset($list[1]) ? $list[1] : false;

        if($tag !== 'mtime' || $file === false)
        {
            return false;
        }

        if (file_exists(Environment::get('documentRoot').'/'.$file))
        {
            return $file.'?'.filemtime(Environment::get('documentRoot').'/'.$file);
        }

        return false;
    }
}
