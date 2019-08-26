<?php
return [
    'doctrine' => [
        'driver' => [
            'Login_driver' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    0 => './module/Login/src/V1/Entity',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'Login' => 'Login_driver',
                ],
            ],
        ],
    ],
    'router' => [
        'routes' => [
            'login.rest.doctrine.usuario' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/usuario[/:usuario_id]',
                    'defaults' => [
                        'controller' => 'Login\\V1\\Rest\\Usuario\\Controller',
                    ],
                ],
            ],
            'login.rest.doctrine.endereco' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/endereco[/:endereco_id]',
                    'defaults' => [
                        'controller' => 'Login\\V1\\Rest\\Endereco\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'login.rest.doctrine.usuario',
            1 => 'login.rest.doctrine.endereco',
        ],
    ],
    'zf-rest' => [
        'Login\\V1\\Rest\\Usuario\\Controller' => [
            'listener' => \Login\V1\Rest\Usuario\UsuarioResource::class,
            'route_name' => 'login.rest.doctrine.usuario',
            'route_identifier_name' => 'usuario_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'usuario',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Login\V1\Entity\Usuario::class,
            'collection_class' => \Login\V1\Rest\Usuario\UsuarioCollection::class,
            'service_name' => 'Usuario',
        ],
        'Login\\V1\\Rest\\Endereco\\Controller' => [
            'listener' => \Login\V1\Rest\Endereco\EnderecoResource::class,
            'route_name' => 'login.rest.doctrine.endereco',
            'route_identifier_name' => 'endereco_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'endereco',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Login\V1\Entity\Endereco::class,
            'collection_class' => \Login\V1\Rest\Endereco\EnderecoCollection::class,
            'service_name' => 'Endereco',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Login\\V1\\Rest\\Usuario\\Controller' => 'HalJson',
            'Login\\V1\\Rest\\Endereco\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Login\\V1\\Rest\\Usuario\\Controller' => [
                0 => 'application/vnd.login.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Login\\V1\\Rest\\Endereco\\Controller' => [
                0 => 'application/vnd.login.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Login\\V1\\Rest\\Usuario\\Controller' => [
                0 => 'application/vnd.login.v1+json',
                1 => 'application/json',
            ],
            'Login\\V1\\Rest\\Endereco\\Controller' => [
                0 => 'application/vnd.login.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \Login\V1\Entity\Usuario::class => [
                'route_identifier_name' => 'usuario_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'login.rest.doctrine.usuario',
                'hydrator' => 'Login\\V1\\Rest\\Usuario\\UsuarioHydrator',
            ],
            \Login\V1\Rest\Usuario\UsuarioCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'login.rest.doctrine.usuario',
                'is_collection' => true,
            ],
            \Login\V1\Entity\Endereco::class => [
                'route_identifier_name' => 'endereco_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'login.rest.doctrine.endereco',
                'hydrator' => 'Login\\V1\\Rest\\Endereco\\EnderecoHydrator',
            ],
            \Login\V1\Rest\Endereco\EnderecoCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'login.rest.doctrine.endereco',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'doctrine-connected' => [
            \Login\V1\Rest\Usuario\UsuarioResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Login\\V1\\Rest\\Usuario\\UsuarioHydrator',
            ],
            \Login\V1\Rest\Endereco\EnderecoResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Login\\V1\\Rest\\Endereco\\EnderecoHydrator',
            ],
        ],
    ],
    'doctrine-hydrator' => [
        'Login\\V1\\Rest\\Usuario\\UsuarioHydrator' => [
            'entity_class' => \Login\V1\Entity\Usuario::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'Login\\V1\\Rest\\Endereco\\EnderecoHydrator' => [
            'entity_class' => \Login\V1\Entity\Endereco::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
    ],
    'zf-content-validation' => [
        'Login\\V1\\Rest\\Usuario\\Controller' => [
            'input_filter' => 'Login\\V1\\Rest\\Usuario\\Validator',
        ],
        'Login\\V1\\Rest\\Endereco\\Controller' => [
            'input_filter' => 'Login\\V1\\Rest\\Endereco\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Login\\V1\\Rest\\Usuario\\Validator' => [
            0 => [
                'name' => 'nome',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 30,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'cpf',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 11,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'telefone',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 15,
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'email',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 30,
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'datanascimento',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            5 => [
                'name' => 'senha',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 6,
                        ],
                    ],
                ],
            ],
        ],
        'Login\\V1\\Rest\\Endereco\\Validator' => [
            0 => [
                'name' => 'rua',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 30,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'cidade',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 20,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'estado',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 2,
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'numero',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 7,
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'bairro',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 30,
                        ],
                    ],
                ],
            ],
            5 => [
                'name' => 'complemento',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 30,
                        ],
                    ],
                ],
            ],
        ],
    ],
];
