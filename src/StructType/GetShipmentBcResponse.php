<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentBcResponse StructType
 */
class GetShipmentBcResponse extends AbstractStructBase
{
    /**
     * The GetShipmentBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ShipmentDataExtendedBc
     */
    public $GetShipmentBcResult;

    /**
     * Constructor method for GetShipmentBcResponse
     *
     * @uses GetShipmentBcResponse::setGetShipmentBcResult()
     */
    public function __construct(?ShipmentDataExtendedBc $getShipmentBcResult = null)
    {
        $this
            ->setGetShipmentBcResult($getShipmentBcResult)
        ;
    }

    /**
     * Get GetShipmentBcResult value
     *
     * @return ShipmentDataExtendedBc|null
     */
    public function getGetShipmentBcResult()
    {
        return $this->GetShipmentBcResult;
    }

    /**
     * Set GetShipmentBcResult value
     *
     * @return self
     */
    public function setGetShipmentBcResult(?ShipmentDataExtendedBc $getShipmentBcResult = null)
    {
        $this->GetShipmentBcResult = $getShipmentBcResult;
        return $this;
    }
}
