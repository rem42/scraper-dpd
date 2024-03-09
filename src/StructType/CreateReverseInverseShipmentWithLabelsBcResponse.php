<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipmentWithLabelsBcResponse
 * StructType
 */
class CreateReverseInverseShipmentWithLabelsBcResponse extends AbstractStructBase
{
    /**
     * The CreateReverseInverseShipmentWithLabelsBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ShipmentWithLabelsBc
     */
    public $CreateReverseInverseShipmentWithLabelsBcResult;

    /**
     * Constructor method for CreateReverseInverseShipmentWithLabelsBcResponse
     *
     * @uses CreateReverseInverseShipmentWithLabelsBcResponse::setCreateReverseInverseShipmentWithLabelsBcResult()
     */
    public function __construct(?ShipmentWithLabelsBc $createReverseInverseShipmentWithLabelsBcResult = null)
    {
        $this
            ->setCreateReverseInverseShipmentWithLabelsBcResult($createReverseInverseShipmentWithLabelsBcResult)
        ;
    }

    /**
     * Get CreateReverseInverseShipmentWithLabelsBcResult value
     *
     * @return ShipmentWithLabelsBc|null
     */
    public function getCreateReverseInverseShipmentWithLabelsBcResult()
    {
        return $this->CreateReverseInverseShipmentWithLabelsBcResult;
    }

    /**
     * Set CreateReverseInverseShipmentWithLabelsBcResult value
     *
     * @return self
     */
    public function setCreateReverseInverseShipmentWithLabelsBcResult(?ShipmentWithLabelsBc $createReverseInverseShipmentWithLabelsBcResult = null)
    {
        $this->CreateReverseInverseShipmentWithLabelsBcResult = $createReverseInverseShipmentWithLabelsBcResult;
        return $this;
    }
}
