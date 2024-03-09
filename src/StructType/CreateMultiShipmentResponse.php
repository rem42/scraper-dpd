<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMultiShipmentResponse StructType
 */
class CreateMultiShipmentResponse extends AbstractStructBase
{
    /**
     * The CreateMultiShipmentResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var MultiShipment
     */
    public $CreateMultiShipmentResult;

    /**
     * Constructor method for CreateMultiShipmentResponse
     *
     * @uses CreateMultiShipmentResponse::setCreateMultiShipmentResult()
     */
    public function __construct(?MultiShipment $createMultiShipmentResult = null)
    {
        $this
            ->setCreateMultiShipmentResult($createMultiShipmentResult)
        ;
    }

    /**
     * Get CreateMultiShipmentResult value
     *
     * @return MultiShipment|null
     */
    public function getCreateMultiShipmentResult()
    {
        return $this->CreateMultiShipmentResult;
    }

    /**
     * Set CreateMultiShipmentResult value
     *
     * @return self
     */
    public function setCreateMultiShipmentResult(?MultiShipment $createMultiShipmentResult = null)
    {
        $this->CreateMultiShipmentResult = $createMultiShipmentResult;
        return $this;
    }
}
