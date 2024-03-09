<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNumberRange StructType
 */
class GetNumberRange extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var NumberRangeRequest
     */
    public $request;

    /**
     * Constructor method for GetNumberRange
     *
     * @uses GetNumberRange::setRequest()
     */
    public function __construct(?NumberRangeRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return NumberRangeRequest|null
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
    public function setRequest(?NumberRangeRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
