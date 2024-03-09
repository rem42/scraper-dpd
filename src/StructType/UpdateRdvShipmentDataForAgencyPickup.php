<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRdvShipmentDataForAgencyPickup StructType
 */
class UpdateRdvShipmentDataForAgencyPickup extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var UpdateRdvShipmentDataForAgencyPickupRequest
     */
    public $request;

    /**
     * Constructor method for UpdateRdvShipmentDataForAgencyPickup
     *
     * @uses UpdateRdvShipmentDataForAgencyPickup::setRequest()
     */
    public function __construct(?UpdateRdvShipmentDataForAgencyPickupRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return UpdateRdvShipmentDataForAgencyPickupRequest|null
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
    public function setRequest(?UpdateRdvShipmentDataForAgencyPickupRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
