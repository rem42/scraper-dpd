<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateServiceNotice StructType
 */
class UpdateServiceNotice extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var UpdateServiceNoticeRequest
     */
    public $request;

    /**
     * Constructor method for UpdateServiceNotice
     *
     * @uses UpdateServiceNotice::setRequest()
     */
    public function __construct(?UpdateServiceNoticeRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return UpdateServiceNoticeRequest|null
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
    public function setRequest(?UpdateServiceNoticeRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
