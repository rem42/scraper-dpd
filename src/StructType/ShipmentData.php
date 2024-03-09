<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ShipmentData StructType
 */
class ShipmentData extends ShipmentDataBase
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
     * The parcelnumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $parcelnumber;
    /**
     * The countrycode_retour
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $countrycode_retour;
    /**
     * The centernumber_retour
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $centernumber_retour;
    /**
     * The parcelnumber_retour
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $parcelnumber_retour;

    /**
     * Constructor method for ShipmentData
     *
     * @uses ShipmentData::setCountrycode()
     * @uses ShipmentData::setCenternumber()
     * @uses ShipmentData::setParcelnumber()
     * @uses ShipmentData::setCountrycode_retour()
     * @uses ShipmentData::setCenternumber_retour()
     * @uses ShipmentData::setParcelnumber_retour()
     *
     * @param string $countrycode
     * @param string $centernumber
     * @param string $parcelnumber
     * @param string $countrycode_retour
     * @param string $centernumber_retour
     * @param string $parcelnumber_retour
     */
    public function __construct($countrycode = null, $centernumber = null, $parcelnumber = null, $countrycode_retour = null, $centernumber_retour = null, $parcelnumber_retour = null)
    {
        $this
            ->setCountrycode($countrycode)
            ->setCenternumber($centernumber)
            ->setParcelnumber($parcelnumber)
            ->setCountrycode_retour($countrycode_retour)
            ->setCenternumber_retour($centernumber_retour)
            ->setParcelnumber_retour($parcelnumber_retour)
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
     * Get parcelnumber value
     *
     * @return string|null
     */
    public function getParcelnumber()
    {
        return $this->parcelnumber;
    }

    /**
     * Set parcelnumber value
     *
     * @param string $parcelnumber
     *
     * @return self
     */
    public function setParcelnumber($parcelnumber = null)
    {
        // validation for constraint: string
        if (null !== $parcelnumber && !\is_string($parcelnumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelnumber, true), \gettype($parcelnumber)), __LINE__);
        }
        $this->parcelnumber = $parcelnumber;
        return $this;
    }

    /**
     * Get countrycode_retour value
     *
     * @return string|null
     */
    public function getCountrycode_retour()
    {
        return $this->countrycode_retour;
    }

    /**
     * Set countrycode_retour value
     *
     * @param string $countrycode_retour
     *
     * @return self
     */
    public function setCountrycode_retour($countrycode_retour = null)
    {
        // validation for constraint: string
        if (null !== $countrycode_retour && !\is_string($countrycode_retour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countrycode_retour, true), \gettype($countrycode_retour)), __LINE__);
        }
        $this->countrycode_retour = $countrycode_retour;
        return $this;
    }

    /**
     * Get centernumber_retour value
     *
     * @return string|null
     */
    public function getCenternumber_retour()
    {
        return $this->centernumber_retour;
    }

    /**
     * Set centernumber_retour value
     *
     * @param string $centernumber_retour
     *
     * @return self
     */
    public function setCenternumber_retour($centernumber_retour = null)
    {
        // validation for constraint: string
        if (null !== $centernumber_retour && !\is_string($centernumber_retour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($centernumber_retour, true), \gettype($centernumber_retour)), __LINE__);
        }
        $this->centernumber_retour = $centernumber_retour;
        return $this;
    }

    /**
     * Get parcelnumber_retour value
     *
     * @return string|null
     */
    public function getParcelnumber_retour()
    {
        return $this->parcelnumber_retour;
    }

    /**
     * Set parcelnumber_retour value
     *
     * @param string $parcelnumber_retour
     *
     * @return self
     */
    public function setParcelnumber_retour($parcelnumber_retour = null)
    {
        // validation for constraint: string
        if (null !== $parcelnumber_retour && !\is_string($parcelnumber_retour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelnumber_retour, true), \gettype($parcelnumber_retour)), __LINE__);
        }
        $this->parcelnumber_retour = $parcelnumber_retour;
        return $this;
    }
}
