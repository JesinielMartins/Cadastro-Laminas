<?php

namespace Cadastro;

use Laminas\ServiceManager\Factory\InvokableFactory;

return[
    'router' => [
        'routes' => [
            'cadastro' =>[
                'type' => \Laminas\Router\Http\Segment ::class,
                'options' => [
                    'route' => '/cadastro[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+'
                    ],
                    'defaults'=> [
                        'controller' => Controller\CadastroController ::class,
                        'action' => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\CadastroController ::class => InvokableFactory ::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'cadastro' => __DIR__ . '/../view',
            'adicionar' => __DIR__ . '/../view'
        ],
    ],
];