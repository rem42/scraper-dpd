<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipmentResponse StructType
 */
class CreateReverseInverseShipmentResponse extends AbstractStructBase
{
    /**
     * The CreateReverseInverseShipmentResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Shipment
     */
    public $CreateReverseInverseShipmentResult;

    /**
     * Constructor method for CreateReverseInverseShipmentResponse
     *
     * @uses CreateReverseInverseShipmentResponse::setCreateReverseInverseShipmentResult()
     */
    public function __construct(?Shipment $createReverseInverseShipmentResult = null)
    {
        $this
            ->setCreateReverseInverseShipmentResult($createReverseInverseShipmentResult)
        ;
    }

    /**
     * Get CreateReverseInverseShipmentResult value
     *
     * @return Shipment|null
     */
    public function getCreateReverseInverseShipmentResult()
    {
        return $this->CreateReverseInverseShipmentResult;
    }

    /**
     * Set CreateReverseInverseShipmentResult value
     *
     * @return self
     */
    public function setCreateReverseInverseShipmentResult(?Shipment $createReverseInverseShipmentResult = null)
    {
        $this->CreateReverseInverseShipmentResult = $createReverseInverseShipmentResult;
        return $this;
    }
}
