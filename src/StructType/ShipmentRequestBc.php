<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ShipmentRequestBc StructType
 */
class ShipmentRequestBc extends ShipmentRequestBcBase
{
    /**
     * The GetServices
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var bool
     */
    public $GetServices;
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
     * Constructor method for ShipmentRequestBc
     *
     * @uses ShipmentRequestBc::setGetServices()
     * @uses ShipmentRequestBc::setLanguage()
     *
     * @param bool   $getServices
     * @param string $language
     */
    public function __construct($getServices = null, $language = null)
    {
        $this
            ->setGetServices($getServices)
            ->setLanguage($language)
        ;
    }

    /**
     * Get GetServices value
     *
     * @return bool
     */
    public function getGetServices()
    {
        return $this->GetServices;
    }

    /**
     * Set GetServices value
     *
     * @param bool $getServices
     *
     * @return self
     */
    public function setGetServices($getServices = null)
    {
        // validation for constraint: boolean
        if (null !== $getServices && !\is_bool($getServices)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($getServices, true), \gettype($getServices)), __LINE__);
        }
        $this->GetServices = $getServices;
        return $this;
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
}
