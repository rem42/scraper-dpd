<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentBc StructType
 */
class GetShipmentBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ShipmentRequestBc
     */
    public $request;

    /**
     * Constructor method for GetShipmentBc
     *
     * @uses GetShipmentBc::setRequest()
     */
    public function __construct(?ShipmentRequestBc $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return ShipmentRequestBc|null
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
    public function setRequest(?ShipmentRequestBc $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
