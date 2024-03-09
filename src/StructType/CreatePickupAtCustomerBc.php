<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreatePickupAtCustomerBc StructType
 */
class CreatePickupAtCustomerBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var PickupAtCustomerBcRequest
     */
    public $request;

    /**
     * Constructor method for CreatePickupAtCustomerBc
     *
     * @uses CreatePickupAtCustomerBc::setRequest()
     */
    public function __construct(?PickupAtCustomerBcRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return PickupAtCustomerBcRequest|null
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
    public function setRequest(?PickupAtCustomerBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
