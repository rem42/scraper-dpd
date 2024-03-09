<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServiceNoticesResponse StructType
 */
class GetServiceNoticesResponse extends AbstractStructBase
{
    /**
     * The GetServiceNoticesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ServiceNoticeResponse
     */
    public $GetServiceNoticesResult;

    /**
     * Constructor method for GetServiceNoticesResponse
     *
     * @uses GetServiceNoticesResponse::setGetServiceNoticesResult()
     */
    public function __construct(?ServiceNoticeResponse $getServiceNoticesResult = null)
    {
        $this
            ->setGetServiceNoticesResult($getServiceNoticesResult)
        ;
    }

    /**
     * Get GetServiceNoticesResult value
     *
     * @return ServiceNoticeResponse|null
     */
    public function getGetServiceNoticesResult()
    {
        return $this->GetServiceNoticesResult;
    }

    /**
     * Set GetServiceNoticesResult value
     *
     * @return self
     */
    public function setGetServiceNoticesResult(?ServiceNoticeResponse $getServiceNoticesResult = null)
    {
        $this->GetServiceNoticesResult = $getServiceNoticesResult;
        return $this;
    }
}
