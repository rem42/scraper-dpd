<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendCNOTData StructType
 */
class SendCNOTData extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var CNOTData
     */
    public $request;

    /**
     * Constructor method for SendCNOTData
     *
     * @uses SendCNOTData::setRequest()
     */
    public function __construct(?CNOTData $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return CNOTData|null
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
    public function setRequest(?CNOTData $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
