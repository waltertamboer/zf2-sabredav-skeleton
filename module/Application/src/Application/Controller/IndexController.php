<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $entitymanager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');

        return new ViewModel();
    }
}
