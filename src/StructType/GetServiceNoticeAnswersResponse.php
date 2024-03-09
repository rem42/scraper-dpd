<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServiceNoticeAnswersResponse StructType
 */
class GetServiceNoticeAnswersResponse extends AbstractStructBase
{
    /**
     * The GetServiceNoticeAnswersResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ServiceNoticeAnswersResponse
     */
    public $GetServiceNoticeAnswersResult;

    /**
     * Constructor method for GetServiceNoticeAnswersResponse
     *
     * @uses GetServiceNoticeAnswersResponse::setGetServiceNoticeAnswersResult()
     */
    public function __construct(?ServiceNoticeAnswersResponse $getServiceNoticeAnswersResult = null)
    {
        $this
            ->setGetServiceNoticeAnswersResult($getServiceNoticeAnswersResult)
        ;
    }

    /**
     * Get GetServiceNoticeAnswersResult value
     *
     * @return ServiceNoticeAnswersResponse|null
     */
    public function getGetServiceNoticeAnswersResult()
    {
        return $this->GetServiceNoticeAnswersResult;
    }

    /**
     * Set GetServiceNoticeAnswersResult value
     *
     * @return self
     */
    public function setGetServiceNoticeAnswersResult(?ServiceNoticeAnswersResponse $getServiceNoticeAnswersResult = null)
    {
        $this->GetServiceNoticeAnswersResult = $getServiceNoticeAnswersResult;
        return $this;
    }
}
