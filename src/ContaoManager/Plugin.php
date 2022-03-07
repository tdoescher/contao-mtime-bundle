<?php

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
