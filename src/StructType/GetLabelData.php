<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabelData StructType
 */
class GetLabelData extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GetLabelDataRequest
     */
    public $request;

    /**
     * Constructor method for GetLabelData
     *
     * @uses GetLabelData::setRequest()
     */
    public function __construct(?GetLabelDataRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return GetLabelDataRequest|null
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
    public function setRequest(?GetLabelDataRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
