<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourShipmentDataBcResponse StructType
 */
class GetRetourShipmentDataBcResponse extends AbstractStructBase
{
    /**
     * The GetRetourShipmentDataBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var RetourShipmentDataBc
     */
    public $GetRetourShipmentDataBcResult;

    /**
     * Constructor method for GetRetourShipmentDataBcResponse
     *
     * @uses GetRetourShipmentDataBcResponse::setGetRetourShipmentDataBcResult()
     */
    public function __construct(?RetourShipmentDataBc $getRetourShipmentDataBcResult = null)
    {
        $this
            ->setGetRetourShipmentDataBcResult($getRetourShipmentDataBcResult)
        ;
    }

    /**
     * Get GetRetourShipmentDataBcResult value
     *
     * @return RetourShipmentDataBc|null
     */
    public function getGetRetourShipmentDataBcResult()
    {
        return $this->GetRetourShipmentDataBcResult;
    }

    /**
     * Set GetRetourShipmentDataBcResult value
     *
     * @return self
     */
    public function setGetRetourShipmentDataBcResult(?RetourShipmentDataBc $getRetourShipmentDataBcResult = null)
    {
        $this->GetRetourShipmentDataBcResult = $getRetourShipmentDataBcResult;
        return $this;
    }
}
