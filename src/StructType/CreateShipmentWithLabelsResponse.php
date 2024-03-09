<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentWithLabelsResponse StructType
 */
class CreateShipmentWithLabelsResponse extends AbstractStructBase
{
    /**
     * The CreateShipmentWithLabelsResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ShipmentsWithLabels
     */
    public $CreateShipmentWithLabelsResult;

    /**
     * Constructor method for CreateShipmentWithLabelsResponse
     *
     * @uses CreateShipmentWithLabelsResponse::setCreateShipmentWithLabelsResult()
     */
    public function __construct(?ShipmentsWithLabels $createShipmentWithLabelsResult = null)
    {
        $this
            ->setCreateShipmentWithLabelsResult($createShipmentWithLabelsResult)
        ;
    }

    /**
     * Get CreateShipmentWithLabelsResult value
     *
     * @return ShipmentsWithLabels|null
     */
    public function getCreateShipmentWithLabelsResult()
    {
        return $this->CreateShipmentWithLabelsResult;
    }

    /**
     * Set CreateShipmentWithLabelsResult value
     *
     * @return self
     */
    public function setCreateShipmentWithLabelsResult(?ShipmentsWithLabels $createShipmentWithLabelsResult = null)
    {
        $this->CreateShipmentWithLabelsResult = $createShipmentWithLabelsResult;
        return $this;
    }
}
