<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Reason StructType
 */
class Reason extends AbstractStructBase
{
    /**
     * The Language
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Language;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Text;

    /**
     * Constructor method for Reason
     *
     * @uses Reason::setLanguage()
     * @uses Reason::setText()
     *
     * @param string $language
     * @param string $text
     */
    public function __construct($language = null, $text = null)
    {
        $this
            ->setLanguage($language)
            ->setText($text)
        ;
    }

    /**
     * Get Language value
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * Set Language value
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (null !== $language && !\is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), \gettype($language)), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }

    /**
     * Get Text value
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * Set Text value
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
        $this->Text = $text;
        return $this;
    }
}
