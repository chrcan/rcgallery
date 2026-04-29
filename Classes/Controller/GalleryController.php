<?php

declare(strict_types=1);

/*
 * (c) 2026 rc design visual concepts (rc-design.at)
 * _________________________________________________
 * The TYPO3 project - inspiring people to share!
 * _________________________________________________
 */

namespace Rcdesign\Rcgallery\Controller;

use Psr\Http\Message\ResponseInterface;
use Rcdesign\Rcgallery\Domain\Model\Gallery;
use Rcdesign\Rcgallery\Domain\Repository\GalleryRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;

class GalleryController extends ActionController
{
    protected $galleryRepository;

    public function __construct(GalleryRepository $galleryRepository)
    {
        $this->galleryRepository = $galleryRepository;
    }

    protected function initializeAction(): void
    {
        if (!empty($this->settings['storagePid'])) {
            $querySettings = GeneralUtility::makeInstance(Typo3QuerySettings::class);
            $querySettings->setStoragePageIds(
                GeneralUtility::intExplode(',', (string)$this->settings['storagePid'], true)
            );
            $this->galleryRepository->setDefaultQuerySettings($querySettings);
        }
    }

    public function listAction(): ResponseInterface
    {
        $galleries = $this->galleryRepository->findAll();
        $this->view->assign('galleries', $galleries);
        return $this->htmlResponse();
    }

    public function showAction(Gallery $gallery): ResponseInterface
    {
        $this->view->assign('gallery', $gallery);
        return $this->htmlResponse();
    }
}
