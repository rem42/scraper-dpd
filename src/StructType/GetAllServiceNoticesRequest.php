<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllServiceNoticesRequest StructType
 */
class GetAllServiceNoticesRequest extends AbstractStructBase
{
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Customer
     */
    public $Customer;
    /**
     * The Languages
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfString
     */
    public $Languages;
    /**
     * The LastKey
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $LastKey;

    /**
     * Constructor method for GetAllServiceNoticesRequest
     *
     * @uses GetAllServiceNoticesRequest::setCustomer()
     * @uses GetAllServiceNoticesRequest::setLanguages()
     * @uses GetAllServiceNoticesRequest::setLastKey()
     *
     * @param string $lastKey
     */
    public function __construct(?Customer $customer = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfString $languages = null, $lastKey = null)
    {
        $this
            ->setCustomer($customer)
            ->setLanguages($languages)
            ->setLastKey($lastKey)
        ;
    }

    /**
     * Get Customer value
     *
     * @return Customer|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * Set Customer value
     *
     * @return self
     */
    public function setCustomer(?Customer $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }

    /**
     * Get Languages value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfString|null
     */
    public function getLanguages()
    {
        return $this->Languages;
    }

    /**
     * Set Languages value
     *
     * @return self
     */
    public function setLanguages(?\Scraper\ScraperDPD\ArrayType\ArrayOfString $languages = null)
    {
        $this->Languages = $languages;
        return $this;
    }

    /**
     * Get LastKey value
     *
     * @return string|null
     */
    public function getLastKey()
    {
        return $this->LastKey;
    }

    /**
     * Set LastKey value
     *
     * @param string $lastKey
     *
     * @return self
     */
    public function setLastKey($lastKey = null)
    {
        // validation for constraint: string
        if (null !== $lastKey && !\is_string($lastKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastKey, true), \gettype($lastKey)), __LINE__);
        }
        $this->LastKey = $lastKey;
        return $this;
    }
}
