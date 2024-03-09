<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentBcMultiResponse StructType
 */
class GetShipmentBcMultiResponse extends AbstractStructBase
{
    /**
     * The GetShipmentBcMultiResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var self
     */
    public $GetShipmentBcMultiResult;
    /**
     * The Shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfGetShipmentEntry
     */
    public $Shipments;

    /**
     * Constructor method for GetShipmentBcMultiResponse
     *
     * @uses GetShipmentBcMultiResponse::setGetShipmentBcMultiResult()
     * @uses GetShipmentBcMultiResponse::setShipments()
     */
    public function __construct(?self $getShipmentBcMultiResult = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfGetShipmentEntry $shipments = null)
    {
        $this
            ->setGetShipmentBcMultiResult($getShipmentBcMultiResult)
            ->setShipments($shipments)
        ;
    }

    /**
     * Get GetShipmentBcMultiResult value
     *
     * @return self|null
     */
    public function getGetShipmentBcMultiResult()
    {
        return $this->GetShipmentBcMultiResult;
    }

    /**
     * Set GetShipmentBcMultiResult value
     *
     * @return self
     */
    public function setGetShipmentBcMultiResult(?self $getShipmentBcMultiResult = null)
    {
        $this->GetShipmentBcMultiResult = $getShipmentBcMultiResult;
        return $this;
    }

    /**
     * Get Shipments value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfGetShipmentEntry|null
     */
    public function getShipments()
    {
        return $this->Shipments;
    }

    /**
     * Set Shipments value
     *
     * @return self
     */
    public function setShipments(?\Scraper\ScraperDPD\ArrayType\ArrayOfGetShipmentEntry $shipments = null)
    {
        $this->Shipments = $shipments;
        return $this;
    }
}
