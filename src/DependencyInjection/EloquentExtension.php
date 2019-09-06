<?php // with ♥ and Contao

/**
 * EloquentBundle for Contao Open Source CMS
 * @copyright   (c) 2019 Tastaturberuf <tastaturberuf.de>
 * @author      Daniel Jahnsmüller <code@tastaturberuf.de>
 */

declare(strict_types=1);


namespace Tastaturberuf\EloquentBundle\DependencyInjection;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;


class EloquentExtension extends \Symfony\Component\DependencyInjection\Extension\Extension
{

    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $container->setParameter('eloquent.boot_on_startup', true);
        $container->setParameter('eloquent.boot_as_global', true);
    }

}
