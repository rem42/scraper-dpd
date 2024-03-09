<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastNumber StructType
 */
class GetLastNumber extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GetLastNumberRequest
     */
    public $request;

    /**
     * Constructor method for GetLastNumber
     *
     * @uses GetLastNumber::setRequest()
     */
    public function __construct(?GetLastNumberRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return GetLastNumberRequest|null
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
    public function setRequest(?GetLastNumberRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
