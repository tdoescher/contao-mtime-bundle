<?php

/**
 * This file is part of MtimeBundle for Contao
 *
 * @package     tdoescher/mtime-bundle
 * @author      Torben Döscher <mail@tdoescher.de>
 * @license     LGPL
 * @copyright   tdoescher.de // WEB & IT <https://tdoescher.de>
 */

namespace tdoescher\MtimeBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use tdoescher\MtimeBundle\MtimeBundle;

class Plugin implements BundlePluginInterface
{
  public function getBundles(ParserInterface $parser): array
  {
    return [
      BundleConfig::create(MtimeBundle::class)
        ->setLoadAfter([ContaoCoreBundle::class]),
    ];
  }
}
