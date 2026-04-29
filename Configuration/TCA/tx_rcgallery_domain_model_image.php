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
        'title' => 'LLL:EXT:rcgallery/Resources/Private/Language/locallang_db.xlf:tx_rcgallery_domain_model_image',
        'label' => 'file',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'enablecolumns' => [
        ],

        'iconfile' => 'EXT:rcgallery/Resources/Public/Icons/tx_rcgallery_domain_model_image.gif',
    ],
    'types' => [
        '1' => ['showitem' => 'file, caption, --div--;core.form.tabs:language, sys_language_uid, l10n_parent, l10n_diffsource'],
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
                'foreign_table' => 'tx_rcgallery_domain_model_image',
                'foreign_table_where' => 'AND {#tx_rcgallery_domain_model_image}.{#pid}=###CURRENT_PID### AND {#tx_rcgallery_domain_model_image}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],

        'file' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rcgallery/Resources/Private/Language/locallang_db.xlf:tx_rcgallery_domain_model_image.file',
            'config' => [
                'type' => 'file',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'maxitems' => 1,
                'minitems' => 1,
                'appearance' => [
                    'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
                ],
            ],
        ],
        'caption' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rcgallery/Resources/Private/Language/locallang_db.xlf:tx_rcgallery_domain_model_image.caption',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => '',
            ],
        ],

        'gallery' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
