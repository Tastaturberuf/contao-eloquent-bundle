<?php // with ♥ and Contao

/**
 * EloquentBundle for Contao Open Source CMS
 * @copyright   (c) 2019 Tastaturberuf <tastaturberuf.de>
 * @author      Daniel Jahnsmüller <code@tastaturberuf.de>
 */

declare(strict_types=1);


namespace Tastaturberuf\EloquentBundle\Contao\Manager;


use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Tastaturberuf\EloquentBundle\EloquentBundle;


class Plugin implements BundlePluginInterface
{

    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(EloquentBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }

}

