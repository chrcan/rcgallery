<?php

declare(strict_types=1);

/*
 * (c) 2026 rc design visual concepts (rc-design.at)
 * _________________________________________________
 * The TYPO3 project - inspiring people to share!
 * _________________________________________________
 */

namespace Rcdesign\Rcgallery\Domain\Model;

use DateTime;
use TYPO3\CMS\Extbase\Attribute\ORM\Cascade;
use TYPO3\CMS\Extbase\Attribute\ORM\Lazy;
use TYPO3\CMS\Extbase\Attribute\Validate;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
/**
 * Gallery.
 */
class Gallery extends AbstractEntity
{
    /**
     * title.
     *
     * @var string
     */
    #[Validate('NotEmpty')]
    protected $title = '';

    /**
     * recordinDay.
     *
     * @var DateTime
     */
    protected $recordinDay;

    /**
     * description.
     *
     * @var string
     */
    protected $description = '';

    /**
     * images.
     *
     * @var ObjectStorage<Image>
     */
    #[Cascade('remove')]
    #[Lazy]
    protected $images;

    /**
     * __construct.
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
     * You may modify the constructor of this class instead.
     */
    public function initializeObject(): void
    {
        $this->images = $this->images ?: new ObjectStorage();
    }

    /**
     * Returns the title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title.
     *
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Returns the recordinDay.
     *
     * @return DateTime
     */
    public function getRecordinDay()
    {
        return $this->recordinDay;
    }

    /**
     * Sets the recordinDay.
     *
     * @param DateTime $recordinDay
     */
    public function setRecordinDay(DateTime $recordinDay): void
    {
        $this->recordinDay = $recordinDay;
    }

    /**
     * Returns the description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description.
     *
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Adds a Image.
     *
     * @param Image $image
     */
    public function addImage(Image $image): void
    {
        $this->images->attach($image);
    }

    /**
     * Removes a Image.
     *
     * @param Image $imageToRemove The Image to be removed
     */
    public function removeImage(Image $imageToRemove): void
    {
        $this->images->detach($imageToRemove);
    }

    /**
     * Returns the images.
     *
     * @return ObjectStorage<Image>
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images.
     *
     * @param ObjectStorage<Image> $images
     */
    public function setImages(ObjectStorage $images): void
    {
        $this->images = $images;
    }
}
