<?php

declare(strict_types=1);

/*
 * (c) 2026 rc design visual concepts (rc-design.at)
 * _________________________________________________
 * The TYPO3 project - inspiring people to share!
 * _________________________________________________
 */

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'rcgallery-plugin-rcgallery' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:rcgallery/Resources/Public/Icons/rcIcon.svg',
    ],
];
