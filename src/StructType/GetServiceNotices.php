<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServiceNotices StructType
 */
class GetServiceNotices extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ServiceNoticeRequest
     */
    public $request;

    /**
     * Constructor method for GetServiceNotices
     *
     * @uses GetServiceNotices::setRequest()
     */
    public function __construct(?ServiceNoticeRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return ServiceNoticeRequest|null
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
    public function setRequest(?ServiceNoticeRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
