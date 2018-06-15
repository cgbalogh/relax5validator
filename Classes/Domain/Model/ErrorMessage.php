<?php
namespace CGB\Relax5validator\Domain\Model;

/***
 *
 * This file is part of the "relax5validator" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017
 *
 ***/

/**
 * Error Message
 */
class ErrorMessage extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject
{
    /**
     * Text
     *
     * @var string
     * @validate NotEmpty
     */
    protected $text = '';

    /**
     * Description
     *
     * @var string
     */
    protected $description = '';

    /**
     * Returns the text
     *
     * @return string $text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets the text
     *
     * @param string $text
     * @return void
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
