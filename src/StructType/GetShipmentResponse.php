<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentResponse StructType
 */
class GetShipmentResponse extends AbstractStructBase
{
    /**
     * The GetShipmentResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ShipmentDataExtended
     */
    public $GetShipmentResult;

    /**
     * Constructor method for GetShipmentResponse
     *
     * @uses GetShipmentResponse::setGetShipmentResult()
     */
    public function __construct(?ShipmentDataExtended $getShipmentResult = null)
    {
        $this
            ->setGetShipmentResult($getShipmentResult)
        ;
    }

    /**
     * Get GetShipmentResult value
     *
     * @return ShipmentDataExtended|null
     */
    public function getGetShipmentResult()
    {
        return $this->GetShipmentResult;
    }

    /**
     * Set GetShipmentResult value
     *
     * @return self
     */
    public function setGetShipmentResult(?ShipmentDataExtended $getShipmentResult = null)
    {
        $this->GetShipmentResult = $getShipmentResult;
        return $this;
    }
}
