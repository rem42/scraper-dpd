<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCollectionRequest StructType
 */
class CreateCollectionRequest extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var CollectionRequestRequest
     */
    public $request;

    /**
     * Constructor method for CreateCollectionRequest
     *
     * @uses CreateCollectionRequest::setRequest()
     */
    public function __construct(?CollectionRequestRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return CollectionRequestRequest|null
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
    public function setRequest(?CollectionRequestRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
