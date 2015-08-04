<?php

namespace SabreDavModule;

return array(
    'sabredav' => array(
        'dav' => array(
            'enabled' => true,
            'route' => 'sabredav-dav',
            'nodes' => array(
                array(
                    'name' => 'directory',
                    'options' => array(
                        'path' => 'data/webdav/public',
                    ),
                ),
                array(
                    'name' => 'principal',
                    'options' => array(
                        'pdo_service' => 'sabredav.service.pdo',
                    ),
                ),
                array(
                    'name' => 'caldav',
                    'options' => array(
                        'pdo_service' => 'sabredav.service.pdo',
                    ),
                ),
                array(
                    'name' => 'carddav',
                    'options' => array(
                        'pdo_service' => 'sabredav.service.pdo',
                    ),
                ),
            ),
            'plugins' => array(
                array(
                    'name' => 'acl',
                    'options' => array(
                    ),
                ),
                array(
                    'name' => 'auth',
                    'options' => array(
                        'backends' => array(
                            /*array(
                                'name' => 'apache',
                                'options' => array(
                                    'pdo_service' => 'test',
                                ),
                            ),*/
                            /*array(
                                'name' => 'callback',
                                'options' => array(
                                    'callback' => function($username, $password) {
                                        return false;
                                    },
                                ),
                            ),*/
                            /*array(
                                'name' => 'file',
                                'options' => array(
                                    'path' => 'data/webdav/htdigest',
                                ),
                            ),*/
                            array(
                                'name' => 'pdo',
                                'options' => array(
                                    'pdo_service' => 'sabredav.service.pdo',
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    'name' => 'browser',
                    'options' => array(
                    ),
                ),
                array(
                    'name' => 'caldav',
                    'options' => array(
                    ),
                ),
                array(
                    'name' => 'carddav',
                    'options' => array(
                    ),
                ),
                array(
                    'name' => 'lock',
                    'options' => array(
                        'backend' => array(
                            'name' => 'file',
                            'options' => array(
                                'path' => 'data/webdav/locks',
                            ),
                        ),
                        'backend' => array(
                            'name' => 'pdo',
                            'options' => array(
                                'pdo_service' => 'sabredav.service.pdo',
                            ),
                        ),
                    ),
                ),
                array(
                    'name' => 'mount',
                    'options' => array(
                    ),
                ),
                array(
                    'name' => 'partial',
                    'options' => array(
                    ),
                ),
                array(
                    'name' => 'property',
                    'options' => array(
                        'backend' => array(
                            'name' => 'pdo',
                            'options' => array(
                                'pdo_service' => 'sabredav.service.pdo',
                            ),
                        ),
                    ),
                ),
                array(
                    'name' => 'schedule',
                    'options' => array(
                    ),
                ),
                array(
                    'name' => 'subscription',
                    'options' => array(
                    ),
                ),
                array(
                    'name' => 'sync',
                    'options' => array(
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            //'sabredav.service.pdo' => 'Application\Service\SabreDavDoctrineFactory',
            //'sabredav.service.pdo' => 'Application\Service\SabreDavZendDbFactory',
        ),
    ),
);
