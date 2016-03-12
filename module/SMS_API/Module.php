<?php
/**
 * Created by PhpStorm.
 * User: BENGEOS-PC
 * Date: 3/12/2016
 * Time: 6:21 AM
 */

namespace SMS_API;


use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

class Module implements ConfigProviderInterface,ServiceProviderInterface,AutoloaderProviderInterface
{
    public function getAutoloaderConfig()
    {
        // TODO: Implement getAutoloaderConfig() method.
    }

    public function getConfig()
    {
        // TODO: Implement getConfig() method.
    }

    public function getServiceConfig()
    {
        // TODO: Implement getServiceConfig() method.
    }

}