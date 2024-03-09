<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNumberRangeBc StructType
 */
class GetNumberRangeBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var NumberRangeBcRequest
     */
    public $request;

    /**
     * Constructor method for GetNumberRangeBc
     *
     * @uses GetNumberRangeBc::setRequest()
     */
    public function __construct(?NumberRangeBcRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return NumberRangeBcRequest|null
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
    public function setRequest(?NumberRangeBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
