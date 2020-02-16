<?php

return [
    'StreamYoutube\\Model\\StreamYoutube' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'user' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 2000
            ],
            'title' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [
                    'null' => FALSE
                ],
                'index' => 3000
            ],
            'content' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 4000
            ],
            'embed' => [
                'type' => 'TEXT',
                'attrs' => [
                    'null' => FALSE
                ],
                'index' => 5000
            ],
            'meta' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 6000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 11000
            ]
        ]
    ]
];