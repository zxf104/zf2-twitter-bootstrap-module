<?php
return array(
    'di' => array(
        'instance' => array(
            'alias' => array(
                'twittertest' => 'TwitterBootstrap\Controller\TestController',
            ),
            'Zend\View\PhpRenderer' => array(
                'parameters' => array(
                    'options'  => array(
                        'script_paths' => array(
                            'twittertest' => __DIR__ . '/../views',
                        ),
                    ),
                ),
            ),
        ),
    ),
);
