<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNationalTransitTime StructType
 */
class GetNationalTransitTime extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GetNationalTransitTimeRequest
     */
    public $request;

    /**
     * Constructor method for GetNationalTransitTime
     *
     * @uses GetNationalTransitTime::setRequest()
     */
    public function __construct(?GetNationalTransitTimeRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return GetNationalTransitTimeRequest|null
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
    public function setRequest(?GetNationalTransitTimeRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
