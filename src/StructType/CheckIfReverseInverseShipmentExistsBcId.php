<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckIfReverseInverseShipmentExistsBcId StructType
 */
class CheckIfReverseInverseShipmentExistsBcId extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var CheckIfReverseInverseShipmentExistsBcIdRequest
     */
    public $request;

    /**
     * Constructor method for CheckIfReverseInverseShipmentExistsBcId
     *
     * @uses CheckIfReverseInverseShipmentExistsBcId::setRequest()
     */
    public function __construct(?CheckIfReverseInverseShipmentExistsBcIdRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return CheckIfReverseInverseShipmentExistsBcIdRequest|null
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
    public function setRequest(?CheckIfReverseInverseShipmentExistsBcIdRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
