<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionValues StructType
 */
class GetOptionValues extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GetOptionsRequest
     */
    public $request;

    /**
     * Constructor method for GetOptionValues
     *
     * @uses GetOptionValues::setRequest()
     */
    public function __construct(?GetOptionsRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return GetOptionsRequest|null
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
    public function setRequest(?GetOptionsRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
