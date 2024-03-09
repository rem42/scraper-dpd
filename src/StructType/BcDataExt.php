<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for BcDataExt StructType
 */
class BcDataExt extends BcData
{
    /**
     * The BarCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $BarCode;

    /**
     * Constructor method for BcDataExt
     *
     * @uses BcDataExt::setBarCode()
     *
     * @param string $barCode
     */
    public function __construct($barCode = null)
    {
        $this
            ->setBarCode($barCode)
        ;
    }

    /**
     * Get BarCode value
     *
     * @return string|null
     */
    public function getBarCode()
    {
        return $this->BarCode;
    }

    /**
     * Set BarCode value
     *
     * @param string $barCode
     *
     * @return self
     */
    public function setBarCode($barCode = null)
    {
        // validation for constraint: string
        if (null !== $barCode && !\is_string($barCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barCode, true), \gettype($barCode)), __LINE__);
        }
        $this->BarCode = $barCode;
        return $this;
    }
}
