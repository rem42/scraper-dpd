<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllServiceNotices StructType
 */
class GetAllServiceNotices extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GetAllServiceNoticesRequest
     */
    public $request;

    /**
     * Constructor method for GetAllServiceNotices
     *
     * @uses GetAllServiceNotices::setRequest()
     */
    public function __construct(?GetAllServiceNoticesRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return GetAllServiceNoticesRequest|null
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
    public function setRequest(?GetAllServiceNoticesRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
