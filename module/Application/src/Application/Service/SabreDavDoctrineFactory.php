<?php

namespace Application\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class SabreDavDoctrineFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $connection = $serviceLocator->get('doctrine.connection.orm_default');

        return $connection->getWrappedConnection();
    }
}
