<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ShipmentDataExtendedBc StructType
 */
class ShipmentDataExtendedBc extends ShipmentDataExtendedBase
{
    /**
     * The Sin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $Sin;
    /**
     * The Barcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Barcode;
    /**
     * The BarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $BarcodeSource;
    /**
     * The BarcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $BarcodeId;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfServiceEntry
     */
    public $Services;

    /**
     * Constructor method for ShipmentDataExtendedBc
     *
     * @uses ShipmentDataExtendedBc::setSin()
     * @uses ShipmentDataExtendedBc::setBarcode()
     * @uses ShipmentDataExtendedBc::setBarcodeSource()
     * @uses ShipmentDataExtendedBc::setBarcodeId()
     * @uses ShipmentDataExtendedBc::setServices()
     *
     * @param int    $sin
     * @param string $barcode
     * @param string $barcodeSource
     * @param string $barcodeId
     */
    public function __construct($sin = null, $barcode = null, $barcodeSource = null, $barcodeId = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfServiceEntry $services = null)
    {
        $this
            ->setSin($sin)
            ->setBarcode($barcode)
            ->setBarcodeSource($barcodeSource)
            ->setBarcodeId($barcodeId)
            ->setServices($services)
        ;
    }

    /**
     * Get Sin value
     *
     * @return int
     */
    public function getSin()
    {
        return $this->Sin;
    }

    /**
     * Set Sin value
     *
     * @param int $sin
     *
     * @return self
     */
    public function setSin($sin = null)
    {
        // validation for constraint: int
        if (null !== $sin && !(\is_int($sin) || ctype_digit($sin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sin, true), \gettype($sin)), __LINE__);
        }
        $this->Sin = $sin;
        return $this;
    }

    /**
     * Get Barcode value
     *
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }

    /**
     * Set Barcode value
     *
     * @param string $barcode
     *
     * @return self
     */
    public function setBarcode($barcode = null)
    {
        // validation for constraint: string
        if (null !== $barcode && !\is_string($barcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcode, true), \gettype($barcode)), __LINE__);
        }
        $this->Barcode = $barcode;
        return $this;
    }

    /**
     * Get BarcodeSource value
     *
     * @return string|null
     */
    public function getBarcodeSource()
    {
        return $this->BarcodeSource;
    }

    /**
     * Set BarcodeSource value
     *
     * @param string $barcodeSource
     *
     * @return self
     */
    public function setBarcodeSource($barcodeSource = null)
    {
        // validation for constraint: string
        if (null !== $barcodeSource && !\is_string($barcodeSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeSource, true), \gettype($barcodeSource)), __LINE__);
        }
        $this->BarcodeSource = $barcodeSource;
        return $this;
    }

    /**
     * Get BarcodeId value
     *
     * @return string|null
     */
    public function getBarcodeId()
    {
        return $this->BarcodeId;
    }

    /**
     * Set BarcodeId value
     *
     * @param string $barcodeId
     *
     * @return self
     */
    public function setBarcodeId($barcodeId = null)
    {
        // validation for constraint: string
        if (null !== $barcodeId && !\is_string($barcodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeId, true), \gettype($barcodeId)), __LINE__);
        }
        $this->BarcodeId = $barcodeId;
        return $this;
    }

    /**
     * Get Services value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfServiceEntry|null
     */
    public function getServices()
    {
        return $this->Services;
    }

    /**
     * Set Services value
     *
     * @return self
     */
    public function setServices(?\Scraper\ScraperDPD\ArrayType\ArrayOfServiceEntry $services = null)
    {
        $this->Services = $services;
        return $this;
    }
}
