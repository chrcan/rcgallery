<?php

declare(strict_types=1);

/*
 * This file is part of the rcdesign/fluid-styled-content-custom-css package.
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

namespace Rcdesign\Rcgallery\Controller;

/**
 * This file is part of the "Gallery" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Christian Racan <werbegrafik@rc-design.at>, rc design visual concepts
 */

/**
 * GalleryController
 */
class GalleryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * galleryRepository
     *
     * @var \Rcdesign\Rcgallery\Domain\Repository\GalleryRepository
     */
    protected $galleryRepository;

    /**
     * @param \Rcdesign\Rcgallery\Domain\Repository\GalleryRepository $galleryRepository
     */
    public function injectGalleryRepository(\Rcdesign\Rcgallery\Domain\Repository\GalleryRepository $galleryRepository)
    {
        $this->galleryRepository = $galleryRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $galleries = $this->galleryRepository->findAll();
        $this->view->assign('galleries', $galleries);
        //$this->addFlashMessage('Gallery geladen');
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Rcdesign\Rcgallery\Domain\Model\Gallery $gallery
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Rcdesign\Rcgallery\Domain\Model\Gallery $gallery): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('gallery', $gallery);
        return $this->htmlResponse();
    }
}
