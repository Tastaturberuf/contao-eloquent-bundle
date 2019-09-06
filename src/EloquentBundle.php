<?php // with ♥ and Contao

/**
 * EloquentBundle for Contao Open Source CMS
 * @copyright   (c) 2019 Tastaturberuf <tastaturberuf.de>
 * @author      Daniel Jahnsmüller <code@tastaturberuf.de>
 */

declare(strict_types=1);


namespace Tastaturberuf\EloquentBundle;


use Symfony\Component\HttpKernel\Bundle\Bundle;


class EloquentBundle extends Bundle
{

    public function boot()
    {
        $manager = $this->container->get('eloquent.manager');

        if ( $this->container->getParameter('eloquent.boot_on_startup') )
        {
            $manager->bootEloquent();
        }

        if ( $this->container->getParameter('eloquent.boot_as_global') )
        {
            $manager->setAsGlobal();
        }

        if ( 'dev' === $this->container->get('kernel')->getEnvironment() )
        {
            $manager->getConnection()->enableQueryLog();
        }
    }

}
