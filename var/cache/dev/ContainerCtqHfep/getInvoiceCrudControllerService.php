<?php

namespace ContainerCtqHfep;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInvoiceCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\InvoiceCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\InvoiceCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/InvoiceCrudController.php';

        $container->services['App\\Controller\\Admin\\InvoiceCrudController'] = $instance = new \App\Controller\Admin\InvoiceCrudController();

        $instance->setContainer(($container->privates['.service_locator.UIrHhwh'] ?? $container->load('get_ServiceLocator_UIrHhwhService'))->withContext('App\\Controller\\Admin\\InvoiceCrudController', $container));

        return $instance;
    }
}
