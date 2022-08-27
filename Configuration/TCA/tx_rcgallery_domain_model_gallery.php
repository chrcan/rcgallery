<?php

/*
 * This file is part of the rcdesign/rcdesign project.
 *
 * Copyright (C) 2022 rc design visual concepts (rc-design.at)
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

return [
    'ctrl' => [
        'title' => 'LLL:EXT:rcgallery/Resources/Private/Language/locallang_db.xlf:tx_rcgallery_domain_model_gallery',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'enablecolumns' => [
        ],
        'searchFields' => 'title,description',
        'iconfile' => 'EXT:rcgallery/Resources/Public/Icons/tx_rcgallery_domain_model_gallery.gif',
    ],
    'types' => [
        '1' => ['showitem' => 'title, recordin_day, description, images, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_rcgallery_domain_model_gallery',
                'foreign_table_where' => 'AND {#tx_rcgallery_domain_model_gallery}.{#pid}=###CURRENT_PID### AND {#tx_rcgallery_domain_model_gallery}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],

        'title' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rcgallery/Resources/Private/Language/locallang_db.xlf:tx_rcgallery_domain_model_gallery.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'default' => '',
            ],
        ],
        'recordin_day' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rcgallery/Resources/Private/Language/locallang_db.xlf:tx_rcgallery_domain_model_gallery.recordin_day',
            'config' => [
                'dbType' => 'datetime',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 12,
                'eval' => 'datetime',
                'default' => null,
            ],
        ],
        'description' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rcgallery/Resources/Private/Language/locallang_db.xlf:tx_rcgallery_domain_model_gallery.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'images' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rcgallery/Resources/Private/Language/locallang_db.xlf:tx_rcgallery_domain_model_gallery.images',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_rcgallery_domain_model_image',
                'foreign_field' => 'gallery',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1,
                ],
            ],

        ],

    ],
];
