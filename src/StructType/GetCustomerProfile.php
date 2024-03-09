<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerProfile StructType
 */
class GetCustomerProfile extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GetCustomerProfileRequest
     */
    public $request;

    /**
     * Constructor method for GetCustomerProfile
     *
     * @uses GetCustomerProfile::setRequest()
     */
    public function __construct(?GetCustomerProfileRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return GetCustomerProfileRequest|null
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
    public function setRequest(?GetCustomerProfileRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
