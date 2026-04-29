<?php

declare(strict_types=1);

/*
 * (c) 2026 rc design visual concepts (rc-design.at)
 * _________________________________________________
 * The TYPO3 project - inspiring people to share!
 * _________________________________________________
 */

use Rcdesign\Rcgallery\Controller\GalleryController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') || die();

(static function (): void {
    ExtensionUtility::configurePlugin(
        'Rcgallery',
        'Rcgallery',
        [
            GalleryController::class => 'list, show',
        ],
        // non-cacheable actions
        [
            GalleryController::class => '',
        ],
        ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );

})();
