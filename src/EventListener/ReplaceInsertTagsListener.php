<?php

/**
 * This file is part of MtimeBundle for Contao
 *
 * @package     tdoescher/mtime-bundle
 * @author      Torben Döscher <mail@tdoescher.de>
 * @license     LGPL
 * @copyright   tdoescher.de // WEB & IT <https://tdoescher.de>
 */

namespace tdoescher\MtimeBundle\EventListener;

use Contao\CoreBundle\DependencyInjection\Attribute\AsHook;
use Contao\Environment;

 #[AsHook('replaceInsertTags', priority: 100)]
class ReplaceInsertTagsListener
{
  public function __invoke(string $insertTag)
  {
    $list = explode('::', $insertTag);
    $insertTag = $list[0];
    $file = isset($list[1]) ? $list[1] : false;

    if($insertTag !== 'mtime' || $file === false)
    {
      return false;
    }

    if (file_exists(Environment::get('documentRoot').'/'.$file))
    {
      return $file.'?'.filemtime(Environment::get('documentRoot').'/'.$file);
    }

    return $file;
  }
}
