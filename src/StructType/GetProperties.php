<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProperties StructType
 */
class GetProperties extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GetPropertiesRequest
     */
    public $request;

    /**
     * Constructor method for GetProperties
     *
     * @uses GetProperties::setRequest()
     */
    public function __construct(?GetPropertiesRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return GetPropertiesRequest|null
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
    public function setRequest(?GetPropertiesRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
