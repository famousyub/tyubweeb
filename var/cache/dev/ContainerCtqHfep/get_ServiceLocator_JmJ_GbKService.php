<?php

namespace ContainerCtqHfep;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JmJ_GbKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jmJ.gbK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jmJ.gbK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'passEncoder' => ['services', '.container.private.security.password_encoder', 'get_Container_Private_Security_PasswordEncoderService', true],
            'validator' => ['services', '.container.private.validator', 'get_Container_Private_ValidatorService', false],
        ], [
            'passEncoder' => '?',
            'validator' => '?',
        ]);
    }
}
