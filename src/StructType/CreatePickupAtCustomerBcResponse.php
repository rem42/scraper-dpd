<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreatePickupAtCustomerBcResponse StructType
 */
class CreatePickupAtCustomerBcResponse extends AbstractStructBase
{
    /**
     * The CreatePickupAtCustomerBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var PickupAtCustomerResponse
     */
    public $CreatePickupAtCustomerBcResult;

    /**
     * Constructor method for CreatePickupAtCustomerBcResponse
     *
     * @uses CreatePickupAtCustomerBcResponse::setCreatePickupAtCustomerBcResult()
     */
    public function __construct(?PickupAtCustomerResponse $createPickupAtCustomerBcResult = null)
    {
        $this
            ->setCreatePickupAtCustomerBcResult($createPickupAtCustomerBcResult)
        ;
    }

    /**
     * Get CreatePickupAtCustomerBcResult value
     *
     * @return PickupAtCustomerResponse|null
     */
    public function getCreatePickupAtCustomerBcResult()
    {
        return $this->CreatePickupAtCustomerBcResult;
    }

    /**
     * Set CreatePickupAtCustomerBcResult value
     *
     * @return self
     */
    public function setCreatePickupAtCustomerBcResult(?PickupAtCustomerResponse $createPickupAtCustomerBcResult = null)
    {
        $this->CreatePickupAtCustomerBcResult = $createPickupAtCustomerBcResult;
        return $this;
    }
}
