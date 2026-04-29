<?php

declare(strict_types=1);

/*
 * (c) 2026 rc design visual concepts (rc-design.at)
 * _________________________________________________
 * The TYPO3 project - inspiring people to share!
 * _________________________________________________
 */

return [
    'ctrl' => [
        'title' => 'LLL:EXT:rcgallery/Resources/Private/Language/locallang_db.xlf:tx_rcgallery_domain_model_gallery',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'enablecolumns' => [
        ],

        'iconfile' => 'EXT:rcgallery/Resources/Public/Icons/tx_rcgallery_domain_model_gallery.gif',
    ],
    'types' => [
        '1' => ['showitem' => 'title, recordin_day, description, images, --div--;core.form.tabs:language, sys_language_uid, l10n_parent, l10n_diffsource'],
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
                    ['label' => '', 'value' => 0],
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
                'eval' => 'trim',
                'required' => true,
                'default' => '',
            ],
        ],
        'recordin_day' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rcgallery/Resources/Private/Language/locallang_db.xlf:tx_rcgallery_domain_model_gallery.recordin_day',
            'config' => [
                'type' => 'datetime',
                'default' => null,
                'searchable' => false,
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
