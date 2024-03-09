<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Entry StructType
 */
class Entry extends AbstractStructBase
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
     * The NumberFrom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var int
     */
    public $NumberFrom;
    /**
     * The NumberTo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var int
     */
    public $NumberTo;
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
     * Constructor method for Entry
     *
     * @uses Entry::setBarcodeSource()
     * @uses Entry::setNumberFrom()
     * @uses Entry::setNumberTo()
     * @uses Entry::setDomain()
     *
     * @param int    $barcodeSource
     * @param int    $numberFrom
     * @param int    $numberTo
     * @param string $domain
     */
    public function __construct($barcodeSource = null, $numberFrom = null, $numberTo = null, $domain = null)
    {
        $this
            ->setBarcodeSource($barcodeSource)
            ->setNumberFrom($numberFrom)
            ->setNumberTo($numberTo)
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
     * Get NumberFrom value
     *
     * @return int
     */
    public function getNumberFrom()
    {
        return $this->NumberFrom;
    }

    /**
     * Set NumberFrom value
     *
     * @param int $numberFrom
     *
     * @return self
     */
    public function setNumberFrom($numberFrom = null)
    {
        // validation for constraint: int
        if (null !== $numberFrom && !(\is_int($numberFrom) || ctype_digit($numberFrom))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberFrom, true), \gettype($numberFrom)), __LINE__);
        }
        $this->NumberFrom = $numberFrom;
        return $this;
    }

    /**
     * Get NumberTo value
     *
     * @return int
     */
    public function getNumberTo()
    {
        return $this->NumberTo;
    }

    /**
     * Set NumberTo value
     *
     * @param int $numberTo
     *
     * @return self
     */
    public function setNumberTo($numberTo = null)
    {
        // validation for constraint: int
        if (null !== $numberTo && !(\is_int($numberTo) || ctype_digit($numberTo))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberTo, true), \gettype($numberTo)), __LINE__);
        }
        $this->NumberTo = $numberTo;
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
