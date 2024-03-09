<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCollectionRequestBc StructType
 */
class CreateCollectionRequestBc extends AbstractStructBase
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
     * Constructor method for CreateCollectionRequestBc
     *
     * @uses CreateCollectionRequestBc::setRequest()
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
