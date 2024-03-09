<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRdvShipmentDataResponse StructType
 */
class GetRdvShipmentDataResponse extends AbstractStructBase
{
    /**
     * The GetRdvShipmentDataResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfRdvShipmentData
     */
    public $GetRdvShipmentDataResult;

    /**
     * Constructor method for GetRdvShipmentDataResponse
     *
     * @uses GetRdvShipmentDataResponse::setGetRdvShipmentDataResult()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfRdvShipmentData $getRdvShipmentDataResult = null)
    {
        $this
            ->setGetRdvShipmentDataResult($getRdvShipmentDataResult)
        ;
    }

    /**
     * Get GetRdvShipmentDataResult value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfRdvShipmentData|null
     */
    public function getGetRdvShipmentDataResult()
    {
        return $this->GetRdvShipmentDataResult;
    }

    /**
     * Set GetRdvShipmentDataResult value
     *
     * @return self
     */
    public function setGetRdvShipmentDataResult(?\Scraper\ScraperDPD\ArrayType\ArrayOfRdvShipmentData $getRdvShipmentDataResult = null)
    {
        $this->GetRdvShipmentDataResult = $getRdvShipmentDataResult;
        return $this;
    }
}
