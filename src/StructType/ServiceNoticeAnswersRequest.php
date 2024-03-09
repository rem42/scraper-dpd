<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceNoticeAnswersRequest StructType
 */
class ServiceNoticeAnswersRequest extends AbstractStructBase
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $type;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $language;

    /**
     * Constructor method for ServiceNoticeAnswersRequest
     *
     * @uses ServiceNoticeAnswersRequest::setType()
     * @uses ServiceNoticeAnswersRequest::setLanguage()
     *
     * @param string $type
     * @param string $language
     */
    public function __construct($type = null, $language = null)
    {
        $this
            ->setType($type)
            ->setLanguage($language)
        ;
    }

    /**
     * Get type value
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type value
     *
     * @uses \Scraper\ScraperDPD\EnumType\ServiceNoticeType::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\ServiceNoticeType::getValidValues()
     *
     * @param string $type
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\ServiceNoticeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\ServiceNoticeType', \is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperDPD\EnumType\ServiceNoticeType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Get language value
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set language value
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
        $this->language = $language;
        return $this;
    }
}
