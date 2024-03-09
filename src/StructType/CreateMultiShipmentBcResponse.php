<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMultiShipmentBcResponse StructType
 */
class CreateMultiShipmentBcResponse extends AbstractStructBase
{
    /**
     * The CreateMultiShipmentBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var MultiShipmentBc
     */
    public $CreateMultiShipmentBcResult;

    /**
     * Constructor method for CreateMultiShipmentBcResponse
     *
     * @uses CreateMultiShipmentBcResponse::setCreateMultiShipmentBcResult()
     */
    public function __construct(?MultiShipmentBc $createMultiShipmentBcResult = null)
    {
        $this
            ->setCreateMultiShipmentBcResult($createMultiShipmentBcResult)
        ;
    }

    /**
     * Get CreateMultiShipmentBcResult value
     *
     * @return MultiShipmentBc|null
     */
    public function getCreateMultiShipmentBcResult()
    {
        return $this->CreateMultiShipmentBcResult;
    }

    /**
     * Set CreateMultiShipmentBcResult value
     *
     * @return self
     */
    public function setCreateMultiShipmentBcResult(?MultiShipmentBc $createMultiShipmentBcResult = null)
    {
        $this->CreateMultiShipmentBcResult = $createMultiShipmentBcResult;
        return $this;
    }
}
