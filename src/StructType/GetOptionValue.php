<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionValue StructType
 */
class GetOptionValue extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GetOptionRequest
     */
    public $request;

    /**
     * Constructor method for GetOptionValue
     *
     * @uses GetOptionValue::setRequest()
     */
    public function __construct(?GetOptionRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return GetOptionRequest|null
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
    public function setRequest(?GetOptionRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
