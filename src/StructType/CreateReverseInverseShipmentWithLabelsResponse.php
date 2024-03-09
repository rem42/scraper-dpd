<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipmentWithLabelsResponse StructType
 */
class CreateReverseInverseShipmentWithLabelsResponse extends AbstractStructBase
{
    /**
     * The CreateReverseInverseShipmentWithLabelsResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ShipmentWithLabels
     */
    public $CreateReverseInverseShipmentWithLabelsResult;

    /**
     * Constructor method for CreateReverseInverseShipmentWithLabelsResponse
     *
     * @uses CreateReverseInverseShipmentWithLabelsResponse::setCreateReverseInverseShipmentWithLabelsResult()
     */
    public function __construct(?ShipmentWithLabels $createReverseInverseShipmentWithLabelsResult = null)
    {
        $this
            ->setCreateReverseInverseShipmentWithLabelsResult($createReverseInverseShipmentWithLabelsResult)
        ;
    }

    /**
     * Get CreateReverseInverseShipmentWithLabelsResult value
     *
     * @return ShipmentWithLabels|null
     */
    public function getCreateReverseInverseShipmentWithLabelsResult()
    {
        return $this->CreateReverseInverseShipmentWithLabelsResult;
    }

    /**
     * Set CreateReverseInverseShipmentWithLabelsResult value
     *
     * @return self
     */
    public function setCreateReverseInverseShipmentWithLabelsResult(?ShipmentWithLabels $createReverseInverseShipmentWithLabelsResult = null)
    {
        $this->CreateReverseInverseShipmentWithLabelsResult = $createReverseInverseShipmentWithLabelsResult;
        return $this;
    }
}
