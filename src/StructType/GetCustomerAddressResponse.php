<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerAddressResponse StructType
 */
class GetCustomerAddressResponse extends AbstractStructBase
{
    /**
     * The GetCustomerAddressResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var CustomerAddress
     */
    public $GetCustomerAddressResult;

    /**
     * Constructor method for GetCustomerAddressResponse
     *
     * @uses GetCustomerAddressResponse::setGetCustomerAddressResult()
     */
    public function __construct(?CustomerAddress $getCustomerAddressResult = null)
    {
        $this
            ->setGetCustomerAddressResult($getCustomerAddressResult)
        ;
    }

    /**
     * Get GetCustomerAddressResult value
     *
     * @return CustomerAddress|null
     */
    public function getGetCustomerAddressResult()
    {
        return $this->GetCustomerAddressResult;
    }

    /**
     * Set GetCustomerAddressResult value
     *
     * @return self
     */
    public function setGetCustomerAddressResult(?CustomerAddress $getCustomerAddressResult = null)
    {
        $this->GetCustomerAddressResult = $getCustomerAddressResult;
        return $this;
    }
}
