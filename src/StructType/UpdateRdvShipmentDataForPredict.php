<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRdvShipmentDataForPredict StructType
 */
class UpdateRdvShipmentDataForPredict extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var UpdateRdvShipmentDataPredictRequest
     */
    public $request;

    /**
     * Constructor method for UpdateRdvShipmentDataForPredict
     *
     * @uses UpdateRdvShipmentDataForPredict::setRequest()
     */
    public function __construct(?UpdateRdvShipmentDataPredictRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return UpdateRdvShipmentDataPredictRequest|null
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
    public function setRequest(?UpdateRdvShipmentDataPredictRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
