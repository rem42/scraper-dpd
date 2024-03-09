<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PutProperties StructType
 */
class PutProperties extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var PutPropertiesRequest
     */
    public $request;

    /**
     * Constructor method for PutProperties
     *
     * @uses PutProperties::setRequest()
     */
    public function __construct(?PutPropertiesRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return PutPropertiesRequest|null
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
    public function setRequest(?PutPropertiesRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
