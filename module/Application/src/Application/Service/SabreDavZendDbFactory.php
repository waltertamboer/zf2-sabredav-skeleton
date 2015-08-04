<?php

namespace Application\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class SabreDavZendDbFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $connection = $serviceLocator->get('sabredavdb');

        return $connection->getDriver()->getConnection()->getResource();
    }
}
