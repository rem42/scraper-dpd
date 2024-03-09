<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for NumberRangeBcResponse StructType
 */
class NumberRangeBcResponse extends NumberRangeBaseResponse
{
    /**
     * The BarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $BarcodeSource;
    /**
     * The Domain
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Domain;

    /**
     * Constructor method for NumberRangeBcResponse
     *
     * @uses NumberRangeBcResponse::setBarcodeSource()
     * @uses NumberRangeBcResponse::setDomain()
     *
     * @param int    $barcodeSource
     * @param string $domain
     */
    public function __construct($barcodeSource = null, $domain = null)
    {
        $this
            ->setBarcodeSource($barcodeSource)
            ->setDomain($domain)
        ;
    }

    /**
     * Get BarcodeSource value
     *
     * @return int
     */
    public function getBarcodeSource()
    {
        return $this->BarcodeSource;
    }

    /**
     * Set BarcodeSource value
     *
     * @param int $barcodeSource
     *
     * @return self
     */
    public function setBarcodeSource($barcodeSource = null)
    {
        // validation for constraint: int
        if (null !== $barcodeSource && !(\is_int($barcodeSource) || ctype_digit($barcodeSource))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($barcodeSource, true), \gettype($barcodeSource)), __LINE__);
        }
        $this->BarcodeSource = $barcodeSource;
        return $this;
    }

    /**
     * Get Domain value
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     * Set Domain value
     *
     * @param string $domain
     *
     * @return self
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (null !== $domain && !\is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), \gettype($domain)), __LINE__);
        }
        $this->Domain = $domain;
        return $this;
    }
}
