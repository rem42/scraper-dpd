<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for UpdateRdvShipmentDataPredictRequest StructType
 */
class UpdateRdvShipmentDataPredictRequest extends UpdateRdvShipmentData
{
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
     * Constructor method for UpdateRdvShipmentDataPredictRequest
     *
     * @uses UpdateRdvShipmentDataPredictRequest::setDeliveryInfo()
     * @uses UpdateRdvShipmentDataPredictRequest::setEsnInfo()
     * @uses UpdateRdvShipmentDataPredictRequest::setAdditionalData()
     */
    public function __construct(?RdvDeliveryInfo $deliveryInfo = null, ?RdvEsnInfo $esnInfo = null, ?RdvData $additionalData = null)
    {
        $this
            ->setDeliveryInfo($deliveryInfo)
            ->setEsnInfo($esnInfo)
            ->setAdditionalData($additionalData)
        ;
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
