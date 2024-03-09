<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServiceNoticeAnswers StructType
 */
class GetServiceNoticeAnswers extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ServiceNoticeAnswersRequest
     */
    public $request;

    /**
     * Constructor method for GetServiceNoticeAnswers
     *
     * @uses GetServiceNoticeAnswers::setRequest()
     */
    public function __construct(?ServiceNoticeAnswersRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return ServiceNoticeAnswersRequest|null
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
    public function setRequest(?ServiceNoticeAnswersRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
