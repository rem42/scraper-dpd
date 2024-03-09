<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentBcResponse StructType
 */
class CreateShipmentBcResponse extends AbstractStructBase
{
    /**
     * The CreateShipmentBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc
     */
    public $CreateShipmentBcResult;

    /**
     * Constructor method for CreateShipmentBcResponse
     *
     * @uses CreateShipmentBcResponse::setCreateShipmentBcResult()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc $createShipmentBcResult = null)
    {
        $this
            ->setCreateShipmentBcResult($createShipmentBcResult)
        ;
    }

    /**
     * Get CreateShipmentBcResult value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc|null
     */
    public function getCreateShipmentBcResult()
    {
        return $this->CreateShipmentBcResult;
    }

    /**
     * Set CreateShipmentBcResult value
     *
     * @return self
     */
    public function setCreateShipmentBcResult(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc $createShipmentBcResult = null)
    {
        $this->CreateShipmentBcResult = $createShipmentBcResult;
        return $this;
    }
}
