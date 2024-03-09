<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreatePickupAtCustomerResponse StructType
 */
class CreatePickupAtCustomerResponse extends AbstractStructBase
{
    /**
     * The CreatePickupAtCustomerResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Parcel
     */
    public $CreatePickupAtCustomerResult;

    /**
     * Constructor method for CreatePickupAtCustomerResponse
     *
     * @uses CreatePickupAtCustomerResponse::setCreatePickupAtCustomerResult()
     */
    public function __construct(?Parcel $createPickupAtCustomerResult = null)
    {
        $this
            ->setCreatePickupAtCustomerResult($createPickupAtCustomerResult)
        ;
    }

    /**
     * Get CreatePickupAtCustomerResult value
     *
     * @return Parcel|null
     */
    public function getCreatePickupAtCustomerResult()
    {
        return $this->CreatePickupAtCustomerResult;
    }

    /**
     * Set CreatePickupAtCustomerResult value
     *
     * @return self
     */
    public function setCreatePickupAtCustomerResult(?Parcel $createPickupAtCustomerResult = null)
    {
        $this->CreatePickupAtCustomerResult = $createPickupAtCustomerResult;
        return $this;
    }
}
