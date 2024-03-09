<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for TerminateCollectionRequest StructType
 */
class TerminateCollectionRequest extends TerminateCollectionRequestParcel
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var self
     */
    public $request;

    /**
     * Constructor method for TerminateCollectionRequest
     *
     * @uses TerminateCollectionRequest::setRequest()
     */
    public function __construct(?self $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return self|null
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
    public function setRequest(?self $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
