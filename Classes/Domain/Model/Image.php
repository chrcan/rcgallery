<?php

declare(strict_types=1);

/*
 * (c) 2026 rc design visual concepts (rc-design.at)
 * _________________________________________________
 * The TYPO3 project - inspiring people to share!
 * _________________________________________________
 */

namespace Rcdesign\Rcgallery\Domain\Model;

use TYPO3\CMS\Extbase\Attribute\ORM\Cascade;
use TYPO3\CMS\Extbase\Attribute\Validate;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Image extends AbstractEntity
{
    /**
     * file.
     *
     * @var FileReference
     */
    #[Validate('NotEmpty')]
    #[Cascade('remove')]
    protected $file;

    /**
     * caption.
     *
     * @var string
     */
    protected $caption = '';

    /**
     * Returns the file.
     *
     * @return FileReference
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets the file.
     *
     * @param FileReference $file
     */
    public function setFile(FileReference $file): void
    {
        $this->file = $file;
    }

    /**
     * Returns the caption.
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Sets the caption.
     *
     * @param string $caption
     */
    public function setCaption(string $caption): void
    {
        $this->caption = $caption;
    }
}
