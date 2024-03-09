<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TerminateNumberRange StructType
 */
class TerminateNumberRange extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var TerminateNumberRangeRequest
     */
    public $request;

    /**
     * Constructor method for TerminateNumberRange
     *
     * @uses TerminateNumberRange::setRequest()
     */
    public function __construct(?TerminateNumberRangeRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return TerminateNumberRangeRequest|null
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
    public function setRequest(?TerminateNumberRangeRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
