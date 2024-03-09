<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for RetourShipmentRequest StructType
 */
class RetourShipmentRequest extends RetourShipmentBaseRequest
{
    /**
     * The countrycode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $countrycode;
    /**
     * The centernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $centernumber;
    /**
     * The original_parcelnumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $original_parcelnumber;

    /**
     * Constructor method for RetourShipmentRequest
     *
     * @uses RetourShipmentRequest::setCountrycode()
     * @uses RetourShipmentRequest::setCenternumber()
     * @uses RetourShipmentRequest::setOriginal_parcelnumber()
     *
     * @param string $countrycode
     * @param string $centernumber
     * @param string $original_parcelnumber
     */
    public function __construct($countrycode = null, $centernumber = null, $original_parcelnumber = null)
    {
        $this
            ->setCountrycode($countrycode)
            ->setCenternumber($centernumber)
            ->setOriginal_parcelnumber($original_parcelnumber)
        ;
    }

    /**
     * Get countrycode value
     *
     * @return string|null
     */
    public function getCountrycode()
    {
        return $this->countrycode;
    }

    /**
     * Set countrycode value
     *
     * @param string $countrycode
     *
     * @return self
     */
    public function setCountrycode($countrycode = null)
    {
        // validation for constraint: string
        if (null !== $countrycode && !\is_string($countrycode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countrycode, true), \gettype($countrycode)), __LINE__);
        }
        $this->countrycode = $countrycode;
        return $this;
    }

    /**
     * Get centernumber value
     *
     * @return string|null
     */
    public function getCenternumber()
    {
        return $this->centernumber;
    }

    /**
     * Set centernumber value
     *
     * @param string $centernumber
     *
     * @return self
     */
    public function setCenternumber($centernumber = null)
    {
        // validation for constraint: string
        if (null !== $centernumber && !\is_string($centernumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($centernumber, true), \gettype($centernumber)), __LINE__);
        }
        $this->centernumber = $centernumber;
        return $this;
    }

    /**
     * Get original_parcelnumber value
     *
     * @return string|null
     */
    public function getOriginal_parcelnumber()
    {
        return $this->original_parcelnumber;
    }

    /**
     * Set original_parcelnumber value
     *
     * @param string $original_parcelnumber
     *
     * @return self
     */
    public function setOriginal_parcelnumber($original_parcelnumber = null)
    {
        // validation for constraint: string
        if (null !== $original_parcelnumber && !\is_string($original_parcelnumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($original_parcelnumber, true), \gettype($original_parcelnumber)), __LINE__);
        }
        $this->original_parcelnumber = $original_parcelnumber;
        return $this;
    }
}
