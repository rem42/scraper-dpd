<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRdvShipmentDataForShop StructType
 */
class UpdateRdvShipmentDataForShop extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var UpdateRdvShipmentDataForShopRequest
     */
    public $request;

    /**
     * Constructor method for UpdateRdvShipmentDataForShop
     *
     * @uses UpdateRdvShipmentDataForShop::setRequest()
     */
    public function __construct(?UpdateRdvShipmentDataForShopRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return UpdateRdvShipmentDataForShopRequest|null
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
    public function setRequest(?UpdateRdvShipmentDataForShopRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
