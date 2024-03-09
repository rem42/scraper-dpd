<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsDeliverableOnDate StructType
 */
class IsDeliverableOnDate extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var IsDeliverableRequest
     */
    public $request;

    /**
     * Constructor method for IsDeliverableOnDate
     *
     * @uses IsDeliverableOnDate::setRequest()
     */
    public function __construct(?IsDeliverableRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return IsDeliverableRequest|null
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
    public function setRequest(?IsDeliverableRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
