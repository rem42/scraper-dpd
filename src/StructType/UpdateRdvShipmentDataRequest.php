<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for UpdateRdvShipmentDataRequest StructType
 */
class UpdateRdvShipmentDataRequest extends UpdateRdvShipmentData
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var RdvAddress
     */
    public $Address;
    /**
     * The DeliveryInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var RdvDeliveryInfo
     */
    public $DeliveryInfo;
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
     * The AdditionalData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var RdvData
     */
    public $AdditionalData;

    /**
     * Constructor method for UpdateRdvShipmentDataRequest
     *
     * @uses UpdateRdvShipmentDataRequest::setAddress()
     * @uses UpdateRdvShipmentDataRequest::setDeliveryInfo()
     * @uses UpdateRdvShipmentDataRequest::setEsnInfo()
     * @uses UpdateRdvShipmentDataRequest::setAdditionalData()
     */
    public function __construct(?RdvAddress $address = null, ?RdvDeliveryInfo $deliveryInfo = null, ?RdvEsnInfo $esnInfo = null, ?RdvData $additionalData = null)
    {
        $this
            ->setAddress($address)
            ->setDeliveryInfo($deliveryInfo)
            ->setEsnInfo($esnInfo)
            ->setAdditionalData($additionalData)
        ;
    }

    /**
     * Get Address value
     *
     * @return RdvAddress|null
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * Set Address value
     *
     * @return self
     */
    public function setAddress(?RdvAddress $address = null)
    {
        $this->Address = $address;
        return $this;
    }

    /**
     * Get DeliveryInfo value
     *
     * @return RdvDeliveryInfo|null
     */
    public function getDeliveryInfo()
    {
        return $this->DeliveryInfo;
    }

    /**
     * Set DeliveryInfo value
     *
     * @return self
     */
    public function setDeliveryInfo(?RdvDeliveryInfo $deliveryInfo = null)
    {
        $this->DeliveryInfo = $deliveryInfo;
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

    /**
     * Get AdditionalData value
     *
     * @return RdvData|null
     */
    public function getAdditionalData()
    {
        return $this->AdditionalData;
    }

    /**
     * Set AdditionalData value
     *
     * @return self
     */
    public function setAdditionalData(?RdvData $additionalData = null)
    {
        $this->AdditionalData = $additionalData;
        return $this;
    }
}
