<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for UpdateRdvShipmentDataForShopRequest StructType
 */
class UpdateRdvShipmentDataForShopRequest extends UpdateRdvShipmentData
{
    /**
     * The ShopID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ShopID;
    /**
     * The Receiver_ContactName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Receiver_ContactName;
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
     * Constructor method for UpdateRdvShipmentDataForShopRequest
     *
     * @uses UpdateRdvShipmentDataForShopRequest::setShopID()
     * @uses UpdateRdvShipmentDataForShopRequest::setReceiver_ContactName()
     * @uses UpdateRdvShipmentDataForShopRequest::setDeliveryDate()
     * @uses UpdateRdvShipmentDataForShopRequest::setEsnInfo()
     *
     * @param string $shopID
     * @param string $receiver_ContactName
     * @param string $deliveryDate
     */
    public function __construct($shopID = null, $receiver_ContactName = null, $deliveryDate = null, ?RdvEsnInfo $esnInfo = null)
    {
        $this
            ->setShopID($shopID)
            ->setReceiver_ContactName($receiver_ContactName)
            ->setDeliveryDate($deliveryDate)
            ->setEsnInfo($esnInfo)
        ;
    }

    /**
     * Get ShopID value
     *
     * @return string|null
     */
    public function getShopID()
    {
        return $this->ShopID;
    }

    /**
     * Set ShopID value
     *
     * @param string $shopID
     *
     * @return self
     */
    public function setShopID($shopID = null)
    {
        // validation for constraint: string
        if (null !== $shopID && !\is_string($shopID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shopID, true), \gettype($shopID)), __LINE__);
        }
        $this->ShopID = $shopID;
        return $this;
    }

    /**
     * Get Receiver_ContactName value
     *
     * @return string|null
     */
    public function getReceiver_ContactName()
    {
        return $this->Receiver_ContactName;
    }

    /**
     * Set Receiver_ContactName value
     *
     * @param string $receiver_ContactName
     *
     * @return self
     */
    public function setReceiver_ContactName($receiver_ContactName = null)
    {
        // validation for constraint: string
        if (null !== $receiver_ContactName && !\is_string($receiver_ContactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiver_ContactName, true), \gettype($receiver_ContactName)), __LINE__);
        }
        $this->Receiver_ContactName = $receiver_ContactName;
        return $this;
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
