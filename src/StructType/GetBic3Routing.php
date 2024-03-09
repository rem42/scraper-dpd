<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBic3Routing StructType
 */
class GetBic3Routing extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GetBic3RoutingRequest
     */
    public $request;

    /**
     * Constructor method for GetBic3Routing
     *
     * @uses GetBic3Routing::setRequest()
     */
    public function __construct(?GetBic3RoutingRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return GetBic3RoutingRequest|null
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
    public function setRequest(?GetBic3RoutingRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
