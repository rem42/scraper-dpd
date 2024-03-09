<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for GetBic3RoutingRequest StructType
 */
class GetBic3RoutingRequest extends GeoRoutingRequest
{
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Customer
     */
    public $customer;

    /**
     * Constructor method for GetBic3RoutingRequest
     *
     * @uses GetBic3RoutingRequest::setCustomer()
     */
    public function __construct(?Customer $customer = null)
    {
        $this
            ->setCustomer($customer)
        ;
    }

    /**
     * Get customer value
     *
     * @return Customer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set customer value
     *
     * @return self
     */
    public function setCustomer(?Customer $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }
}
