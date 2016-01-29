<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/shared/grav-multi/user/themes/cacti/blueprints.yaml',
    'modified' => 1452236640,
    'data' => [
        'name' => 'Cacti',
        'version' => '1.2.1',
        'description' => 'Minimal theme based on Cactus and Kactus',
        'icon' => 'globe',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-cacti',
        'demo' => 'http://demo.getgrav.org/multilang-skeleton',
        'keywords' => 'cacti, theme, minimal, modern, fast, responsive, html5, css3, multilanguage',
        'bugs' => 'https://github.com/getgrav/grav-theme-cacti/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'default_lang' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Default lang',
                    'default' => 'en',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'author' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Author',
                    'default' => 'Wilberforce Humphries',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'title_header' => [
                    'type' => 'toggle',
                    'label' => 'Title Header',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'home_profile' => [
                    'type' => 'toggle',
                    'label' => 'Home Profile',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'infinite_scroll' => [
                    'type' => 'toggle',
                    'label' => 'Infinite Scroll',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'analytics' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Google Analytics Code',
                    'default' => 'UA-YOURCODE',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'social.twitter' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Twitter',
                    'default' => '@getgrav',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'social.facebook' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Facebook',
                    'default' => 'rockettheme',
                    'validate' => [
                        'type' => 'text'
                    ]
                ]
            ]
        ]
    ]
];
