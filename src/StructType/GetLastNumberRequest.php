<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastNumberRequest StructType
 */
class GetLastNumberRequest extends AbstractStructBase
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
     * The Entries
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfEntry
     */
    public $Entries;

    /**
     * Constructor method for GetLastNumberRequest
     *
     * @uses GetLastNumberRequest::setCustomer()
     * @uses GetLastNumberRequest::setEntries()
     */
    public function __construct(?Customer $customer = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfEntry $entries = null)
    {
        $this
            ->setCustomer($customer)
            ->setEntries($entries)
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
     * Get Entries value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfEntry|null
     */
    public function getEntries()
    {
        return $this->Entries;
    }

    /**
     * Set Entries value
     *
     * @return self
     */
    public function setEntries(?\Scraper\ScraperDPD\ArrayType\ArrayOfEntry $entries = null)
    {
        $this->Entries = $entries;
        return $this;
    }
}
