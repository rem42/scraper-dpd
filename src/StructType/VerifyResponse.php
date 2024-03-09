<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyResponse StructType
 */
class VerifyResponse extends AbstractStructBase
{
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Data;

    /**
     * Constructor method for VerifyResponse
     *
     * @uses VerifyResponse::setData()
     *
     * @param string $data
     */
    public function __construct($data = null)
    {
        $this
            ->setData($data)
        ;
    }

    /**
     * Get Data value
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * Set Data value
     *
     * @param string $data
     *
     * @return self
     */
    public function setData($data = null)
    {
        // validation for constraint: string
        if (null !== $data && !\is_string($data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), \gettype($data)), __LINE__);
        }
        $this->Data = $data;
        return $this;
    }
}
