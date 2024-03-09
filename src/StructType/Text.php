<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Text StructType
 */
class Text extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $id;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $text;

    /**
     * Constructor method for Text
     *
     * @uses Text::setId()
     * @uses Text::setText()
     *
     * @param int    $id
     * @param string $text
     */
    public function __construct($id = null, $text = null)
    {
        $this
            ->setId($id)
            ->setText($text)
        ;
    }

    /**
     * Get id value
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id value
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (null !== $id && !(\is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), \gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }

    /**
     * Get text value
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set text value
     *
     * @param string $text
     *
     * @return self
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (null !== $text && !\is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), \gettype($text)), __LINE__);
        }
        $this->text = $text;
        return $this;
    }
}
