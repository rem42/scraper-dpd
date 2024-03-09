<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelServiceNotice StructType
 */
class CancelServiceNotice extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var CancelServiceNoticeRequest
     */
    public $request;

    /**
     * Constructor method for CancelServiceNotice
     *
     * @uses CancelServiceNotice::setRequest()
     */
    public function __construct(?CancelServiceNoticeRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return CancelServiceNoticeRequest|null
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
    public function setRequest(?CancelServiceNoticeRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
