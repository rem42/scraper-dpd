<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for NumberRangeBcBaseRequest StructType
 */
class NumberRangeBcBaseRequest extends NumberRangeBaseRequest
{
    /**
     * The BarcodecSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $BarcodecSource;
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
     * Constructor method for NumberRangeBcBaseRequest
     *
     * @uses NumberRangeBcBaseRequest::setBarcodecSource()
     * @uses NumberRangeBcBaseRequest::setDomain()
     *
     * @param int    $barcodecSource
     * @param string $domain
     */
    public function __construct($barcodecSource = null, $domain = null)
    {
        $this
            ->setBarcodecSource($barcodecSource)
            ->setDomain($domain)
        ;
    }

    /**
     * Get BarcodecSource value
     *
     * @return int
     */
    public function getBarcodecSource()
    {
        return $this->BarcodecSource;
    }

    /**
     * Set BarcodecSource value
     *
     * @param int $barcodecSource
     *
     * @return self
     */
    public function setBarcodecSource($barcodecSource = null)
    {
        // validation for constraint: int
        if (null !== $barcodecSource && !(\is_int($barcodecSource) || ctype_digit($barcodecSource))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($barcodecSource, true), \gettype($barcodecSource)), __LINE__);
        }
        $this->BarcodecSource = $barcodecSource;
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
