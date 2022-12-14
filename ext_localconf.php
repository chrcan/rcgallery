<?php

/*
 * This file is part of the rcdesign/rcgallery package.
 *
 * Copyright (C) 2022  rc design visual concepts <https://rc-design.at>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * The TYPO3 project - inspiring people to share!
 */

defined('TYPO3') || die();

(static function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Rcgallery',
        'Rcgallery',
        [
            \Rcdesign\Rcgallery\Controller\GalleryController::class => 'list, show',
        ],
        // non-cacheable actions
        [
            \Rcdesign\Rcgallery\Controller\GalleryController::class => '',
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        // TYPO3 v12
        //'@import "EXT:rcgallery/Configuration/TSconfig/Page/*.tsconfig"'

        // TYPO3 v11 and older
        '<INCLUDE_TYPOSCRIPT: source="DIR:EXT:rcgallery/Configuration/TSconfig/Page/" extensions="tsconfig">'
    );
})();
