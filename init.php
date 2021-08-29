<?php

/**
 * Configuration Variables
 * 
 * @author Robin Correa <robincorrea@axs.com.sg>
 * @version 1.1.0
 */

return [
    'db' => [
        'hosts' => [
            'primary' => '192.168.11.21',
            'secondary' => '192.168.11.22',
        ],
        'name' => 'products',
        'user' => 'root',
        'password' => 'password'
    ],
    'mail' => [
        'host' => 'smtp.gmail.com'
    ]
];
