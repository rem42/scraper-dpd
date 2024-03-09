<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSafePlaceData StructType
 */
class GetSafePlaceData extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GetSafePlaceDataRequest
     */
    public $request;

    /**
     * Constructor method for GetSafePlaceData
     *
     * @uses GetSafePlaceData::setRequest()
     */
    public function __construct(?GetSafePlaceDataRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return GetSafePlaceDataRequest|null
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
    public function setRequest(?GetSafePlaceDataRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
