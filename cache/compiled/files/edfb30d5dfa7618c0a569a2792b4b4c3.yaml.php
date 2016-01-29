<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/shared/grav-multi/user/config/site.yaml',
    'modified' => 1454050895,
    'data' => [
        'title' => 'Umarani',
        'author' => [
            'name' => 'Chintan Umarani',
            'email' => 'chintan4u@live.com'
        ],
        'taxonomies' => [
            0 => 'tag'
        ],
        'metadata' => [
            'description' => 'My Grav Site'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => [
            '/redirect-test' => '/',
            '/old/(.*)' => '/new/$1'
        ],
        'routes' => [
            '/something/else' => '/blog/sample-3',
            '/new/(.*)' => '/blog/$1'
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
