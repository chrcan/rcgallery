<?php

declare(strict_types=1);

/*
 * (c) 2026 rc design visual concepts (rc-design.at)
 * _________________________________________________
 * The TYPO3 project - inspiring people to share!
 * _________________________________________________
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'rcgallery',
    'description' => '',
    'category' => 'plugin',
    'author' => 'Christian Racan',
    'author_email' => 'werbegrafik@rc-design.at',
    'state' => 'stable',
    'version' => '2.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '14.0.0-14.3.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
