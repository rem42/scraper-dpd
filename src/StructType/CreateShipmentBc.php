<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentBc StructType
 */
class CreateShipmentBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var StdShipmentRequest
     */
    public $request;

    /**
     * Constructor method for CreateShipmentBc
     *
     * @uses CreateShipmentBc::setRequest()
     */
    public function __construct(?StdShipmentRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return StdShipmentRequest|null
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
    public function setRequest(?StdShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
