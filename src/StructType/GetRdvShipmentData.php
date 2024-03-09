<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRdvShipmentData StructType
 */
class GetRdvShipmentData extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GetRdvShipmentDataRequest
     */
    public $request;

    /**
     * Constructor method for GetRdvShipmentData
     *
     * @uses GetRdvShipmentData::setRequest()
     */
    public function __construct(?GetRdvShipmentDataRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return GetRdvShipmentDataRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set request value
     *
     * @return self
     */
    public function setRequest(?GetRdvShipmentDataRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
