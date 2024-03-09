<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for UpdateRdvShipmentDataForSafePlaceRequest StructType
 */
class UpdateRdvShipmentDataForSafePlaceRequest extends UpdateRdvShipmentData
{
    /**
     * The DeliveryInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var RdvDeliveryInfoSmall
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
     * The Image
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Image;

    /**
     * Constructor method for UpdateRdvShipmentDataForSafePlaceRequest
     *
     * @uses UpdateRdvShipmentDataForSafePlaceRequest::setDeliveryInfo()
     * @uses UpdateRdvShipmentDataForSafePlaceRequest::setEsnInfo()
     * @uses UpdateRdvShipmentDataForSafePlaceRequest::setImage()
     *
     * @param string $image
     */
    public function __construct(?RdvDeliveryInfoSmall $deliveryInfo = null, ?RdvEsnInfo $esnInfo = null, $image = null)
    {
        $this
            ->setDeliveryInfo($deliveryInfo)
            ->setEsnInfo($esnInfo)
            ->setImage($image)
        ;
    }

    /**
     * Get DeliveryInfo value
     *
     * @return RdvDeliveryInfoSmall|null
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
    public function setDeliveryInfo(?RdvDeliveryInfoSmall $deliveryInfo = null)
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
     * Get Image value
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * Set Image value
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage($image = null)
    {
        // validation for constraint: string
        if (null !== $image && !\is_string($image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($image, true), \gettype($image)), __LINE__);
        }
        $this->Image = $image;
        return $this;
    }
}
