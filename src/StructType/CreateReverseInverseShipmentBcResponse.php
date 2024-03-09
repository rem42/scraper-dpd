<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipmentBcResponse StructType
 */
class CreateReverseInverseShipmentBcResponse extends AbstractStructBase
{
    /**
     * The CreateReverseInverseShipmentBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ShipmentBc
     */
    public $CreateReverseInverseShipmentBcResult;

    /**
     * Constructor method for CreateReverseInverseShipmentBcResponse
     *
     * @uses CreateReverseInverseShipmentBcResponse::setCreateReverseInverseShipmentBcResult()
     */
    public function __construct(?ShipmentBc $createReverseInverseShipmentBcResult = null)
    {
        $this
            ->setCreateReverseInverseShipmentBcResult($createReverseInverseShipmentBcResult)
        ;
    }

    /**
     * Get CreateReverseInverseShipmentBcResult value
     *
     * @return ShipmentBc|null
     */
    public function getCreateReverseInverseShipmentBcResult()
    {
        return $this->CreateReverseInverseShipmentBcResult;
    }

    /**
     * Set CreateReverseInverseShipmentBcResult value
     *
     * @return self
     */
    public function setCreateReverseInverseShipmentBcResult(?ShipmentBc $createReverseInverseShipmentBcResult = null)
    {
        $this->CreateReverseInverseShipmentBcResult = $createReverseInverseShipmentBcResult;
        return $this;
    }
}
