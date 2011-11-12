<?php

namespace TwitterBootstrap;

use Zend\Config\Config,
    Zend\Module\Manager,
    Zend\Loader\AutoloaderFactory;

class Module
{
    public function init(Manager $moduleManager)
    {
        $this->initAutoloader();
    }

    public function initAutoloader()
    {
        AutoloaderFactory::factory(array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        ));
    }

    public function getProvides()
    {
        return array(
            __NAMESPACE__ => array(
                'version' => '0.1.0'
            ),
        );
    }

    public function getDependencies()
    {
        return array(
            'AsseticBundle' => array(
                'version' => '>=0.1.0',
                'required' => true
            ),
        );
    }

    public function getConfig($env = null)
    {
        return new Config(include __DIR__ . '/configs/module.config.php');
    }
}
