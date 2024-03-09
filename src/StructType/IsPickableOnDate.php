<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsPickableOnDate StructType
 */
class IsPickableOnDate extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var IsPickableRequest
     */
    public $request;

    /**
     * Constructor method for IsPickableOnDate
     *
     * @uses IsPickableOnDate::setRequest()
     */
    public function __construct(?IsPickableRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return IsPickableRequest|null
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
    public function setRequest(?IsPickableRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
