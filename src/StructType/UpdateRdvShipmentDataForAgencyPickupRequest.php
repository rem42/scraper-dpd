<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for UpdateRdvShipmentDataForAgencyPickupRequest StructType
 */
class UpdateRdvShipmentDataForAgencyPickupRequest extends UpdateRdvShipmentData
{
    /**
     * The DeliveryDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DeliveryDate;
    /**
     * The EsnInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var RdvEsnInfo
     */
    public $EsnInfo;

    /**
     * Constructor method for UpdateRdvShipmentDataForAgencyPickupRequest
     *
     * @uses UpdateRdvShipmentDataForAgencyPickupRequest::setDeliveryDate()
     * @uses UpdateRdvShipmentDataForAgencyPickupRequest::setEsnInfo()
     *
     * @param string $deliveryDate
     */
    public function __construct($deliveryDate = null, ?RdvEsnInfo $esnInfo = null)
    {
        $this
            ->setDeliveryDate($deliveryDate)
            ->setEsnInfo($esnInfo)
        ;
    }

    /**
     * Get DeliveryDate value
     *
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }

    /**
     * Set DeliveryDate value
     *
     * @param string $deliveryDate
     *
     * @return self
     */
    public function setDeliveryDate($deliveryDate = null)
    {
        // validation for constraint: string
        if (null !== $deliveryDate && !\is_string($deliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryDate, true), \gettype($deliveryDate)), __LINE__);
        }
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }

    /**
     * Get EsnInfo value
     *
     * @return RdvEsnInfo|null
     */
    public function getEsnInfo()
    {
        return $this->EsnInfo;
    }

    /**
     * Set EsnInfo value
     *
     * @return self
     */
    public function setEsnInfo(?RdvEsnInfo $esnInfo = null)
    {
        $this->EsnInfo = $esnInfo;
        return $this;
    }
}
