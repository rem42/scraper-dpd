<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParcelInfo StructType
 */
class ParcelInfo extends AbstractStructBase
{
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
     * Constructor method for ParcelInfo
     *
     * @uses ParcelInfo::setBarcodeSource()
     * @uses ParcelInfo::setBarcodeId()
     *
     * @param string $barcodeSource
     * @param string $barcodeId
     */
    public function __construct($barcodeSource = null, $barcodeId = null)
    {
        $this
            ->setBarcodeSource($barcodeSource)
            ->setBarcodeId($barcodeId)
        ;
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
}
