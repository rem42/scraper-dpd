<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRdvShipmentDataForSafePlace StructType
 */
class UpdateRdvShipmentDataForSafePlace extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var UpdateRdvShipmentDataForSafePlaceRequest
     */
    public $request;

    /**
     * Constructor method for UpdateRdvShipmentDataForSafePlace
     *
     * @uses UpdateRdvShipmentDataForSafePlace::setRequest()
     */
    public function __construct(?UpdateRdvShipmentDataForSafePlaceRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return UpdateRdvShipmentDataForSafePlaceRequest|null
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
    public function setRequest(?UpdateRdvShipmentDataForSafePlaceRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
