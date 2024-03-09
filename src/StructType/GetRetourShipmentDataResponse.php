<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourShipmentDataResponse StructType
 */
class GetRetourShipmentDataResponse extends AbstractStructBase
{
    /**
     * The GetRetourShipmentDataResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var RetourShipmentData
     */
    public $GetRetourShipmentDataResult;

    /**
     * Constructor method for GetRetourShipmentDataResponse
     *
     * @uses GetRetourShipmentDataResponse::setGetRetourShipmentDataResult()
     */
    public function __construct(?RetourShipmentData $getRetourShipmentDataResult = null)
    {
        $this
            ->setGetRetourShipmentDataResult($getRetourShipmentDataResult)
        ;
    }

    /**
     * Get GetRetourShipmentDataResult value
     *
     * @return RetourShipmentData|null
     */
    public function getGetRetourShipmentDataResult()
    {
        return $this->GetRetourShipmentDataResult;
    }

    /**
     * Set GetRetourShipmentDataResult value
     *
     * @return self
     */
    public function setGetRetourShipmentDataResult(?RetourShipmentData $getRetourShipmentDataResult = null)
    {
        $this->GetRetourShipmentDataResult = $getRetourShipmentDataResult;
        return $this;
    }
}
