<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentWithLabelsBcResponse StructType
 */
class CreateShipmentWithLabelsBcResponse extends AbstractStructBase
{
    /**
     * The CreateShipmentWithLabelsBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ShipmentsWithLabelsBc
     */
    public $CreateShipmentWithLabelsBcResult;

    /**
     * Constructor method for CreateShipmentWithLabelsBcResponse
     *
     * @uses CreateShipmentWithLabelsBcResponse::setCreateShipmentWithLabelsBcResult()
     */
    public function __construct(?ShipmentsWithLabelsBc $createShipmentWithLabelsBcResult = null)
    {
        $this
            ->setCreateShipmentWithLabelsBcResult($createShipmentWithLabelsBcResult)
        ;
    }

    /**
     * Get CreateShipmentWithLabelsBcResult value
     *
     * @return ShipmentsWithLabelsBc|null
     */
    public function getCreateShipmentWithLabelsBcResult()
    {
        return $this->CreateShipmentWithLabelsBcResult;
    }

    /**
     * Set CreateShipmentWithLabelsBcResult value
     *
     * @return self
     */
    public function setCreateShipmentWithLabelsBcResult(?ShipmentsWithLabelsBc $createShipmentWithLabelsBcResult = null)
    {
        $this->CreateShipmentWithLabelsBcResult = $createShipmentWithLabelsBcResult;
        return $this;
    }
}
