<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreatePickupAtCustomer StructType
 */
class CreatePickupAtCustomer extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var PickupAtCustomerRequest
     */
    public $request;

    /**
     * Constructor method for CreatePickupAtCustomer
     *
     * @uses CreatePickupAtCustomer::setRequest()
     */
    public function __construct(?PickupAtCustomerRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return PickupAtCustomerRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set request value
     *
     * @return self
     */
    public function setRequest(?PickupAtCustomerRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
