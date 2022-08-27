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

namespace Rcdesign\Rcgallery\Domain\Model;

/**
 * This file is part of the "rcdesign" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Christian Racan <werbegrafik@rc-design.at>, rc design visual concepts
 */

/**
 * Gallery
 */
class Gallery extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * recordinDay
     *
     * @var \DateTime
     */
    protected $recordinDay;

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * images
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Rcdesign\Rcgallery\Domain\Model\Image>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $images;

    /**
     * __construct
     */
    public function __construct()
    {
        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     */
    public function initializeObject()
    {
        $this->images = $this->images ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Returns the recordinDay
     *
     * @return \DateTime
     */
    public function getRecordinDay()
    {
        return $this->recordinDay;
    }

    /**
     * Sets the recordinDay
     *
     * @param \DateTime $recordinDay
     */
    public function setRecordinDay(\DateTime $recordinDay)
    {
        $this->recordinDay = $recordinDay;
    }

    /**
     * Returns the description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Adds a Image
     *
     * @param \Rcdesign\Rcgallery\Domain\Model\Image $image
     */
    public function addImage(\Rcdesign\Rcgallery\Domain\Model\Image $image)
    {
        $this->images->attach($image);
    }

    /**
     * Removes a Image
     *
     * @param \Rcdesign\Rcgallery\Domain\Model\Image $imageToRemove The Image to be removed
     */
    public function removeImage(\Rcdesign\Rcgallery\Domain\Model\Image $imageToRemove)
    {
        $this->images->detach($imageToRemove);
    }

    /**
     * Returns the images
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Rcdesign\Rcgallery\Domain\Model\Image>
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Rcdesign\Rcgallery\Domain\Model\Image> $images
     */
    public function setImages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $images)
    {
        $this->images = $images;
    }
}
