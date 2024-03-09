<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentResponse StructType
 */
class CreateShipmentResponse extends AbstractStructBase
{
    /**
     * The CreateShipmentResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfShipment
     */
    public $CreateShipmentResult;

    /**
     * Constructor method for CreateShipmentResponse
     *
     * @uses CreateShipmentResponse::setCreateShipmentResult()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment $createShipmentResult = null)
    {
        $this
            ->setCreateShipmentResult($createShipmentResult)
        ;
    }

    /**
     * Get CreateShipmentResult value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfShipment|null
     */
    public function getCreateShipmentResult()
    {
        return $this->CreateShipmentResult;
    }

    /**
     * Set CreateShipmentResult value
     *
     * @return self
     */
    public function setCreateShipmentResult(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment $createShipmentResult = null)
    {
        $this->CreateShipmentResult = $createShipmentResult;
        return $this;
    }
}
