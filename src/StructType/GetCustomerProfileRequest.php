<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerProfileRequest StructType
 */
class GetCustomerProfileRequest extends AbstractStructBase
{
    /**
     * The Customers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfCustomer
     */
    public $Customers;
    /**
     * The Language
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Language;

    /**
     * Constructor method for GetCustomerProfileRequest
     *
     * @uses GetCustomerProfileRequest::setCustomers()
     * @uses GetCustomerProfileRequest::setLanguage()
     *
     * @param string $language
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfCustomer $customers = null, $language = null)
    {
        $this
            ->setCustomers($customers)
            ->setLanguage($language)
        ;
    }

    /**
     * Get Customers value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfCustomer|null
     */
    public function getCustomers()
    {
        return $this->Customers;
    }

    /**
     * Set Customers value
     *
     * @return self
     */
    public function setCustomers(?\Scraper\ScraperDPD\ArrayType\ArrayOfCustomer $customers = null)
    {
        $this->Customers = $customers;
        return $this;
    }

    /**
     * Get Language value
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * Set Language value
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (null !== $language && !\is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), \gettype($language)), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
}
