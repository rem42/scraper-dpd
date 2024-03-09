<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TerminateNumberRangeBc StructType
 */
class TerminateNumberRangeBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var TerminateNumberRangeBcRequest
     */
    public $request;

    /**
     * Constructor method for TerminateNumberRangeBc
     *
     * @uses TerminateNumberRangeBc::setRequest()
     */
    public function __construct(?TerminateNumberRangeBcRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return TerminateNumberRangeBcRequest|null
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
    public function setRequest(?TerminateNumberRangeBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
