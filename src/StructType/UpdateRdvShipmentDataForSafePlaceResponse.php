<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for UpdateRdvShipmentDataForSafePlaceResponse StructType
 */
class UpdateRdvShipmentDataForSafePlaceResponse extends UpdateRdvShipmentDataResponse
{
    /**
     * The UpdateRdvShipmentDataForSafePlaceResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var self
     */
    public $UpdateRdvShipmentDataForSafePlaceResult;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Code;
    /**
     * The Barcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Barcode;

    /**
     * Constructor method for UpdateRdvShipmentDataForSafePlaceResponse
     *
     * @uses UpdateRdvShipmentDataForSafePlaceResponse::setUpdateRdvShipmentDataForSafePlaceResult()
     * @uses UpdateRdvShipmentDataForSafePlaceResponse::setCode()
     * @uses UpdateRdvShipmentDataForSafePlaceResponse::setBarcode()
     *
     * @param string $code
     * @param string $barcode
     */
    public function __construct(?self $updateRdvShipmentDataForSafePlaceResult = null, $code = null, $barcode = null)
    {
        $this
            ->setUpdateRdvShipmentDataForSafePlaceResult($updateRdvShipmentDataForSafePlaceResult)
            ->setCode($code)
            ->setBarcode($barcode)
        ;
    }

    /**
     * Get UpdateRdvShipmentDataForSafePlaceResult value
     *
     * @return self|null
     */
    public function getUpdateRdvShipmentDataForSafePlaceResult()
    {
        return $this->UpdateRdvShipmentDataForSafePlaceResult;
    }

    /**
     * Set UpdateRdvShipmentDataForSafePlaceResult value
     *
     * @return self
     */
    public function setUpdateRdvShipmentDataForSafePlaceResult(?self $updateRdvShipmentDataForSafePlaceResult = null)
    {
        $this->UpdateRdvShipmentDataForSafePlaceResult = $updateRdvShipmentDataForSafePlaceResult;
        return $this;
    }

    /**
     * Get Code value
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * Set Code value
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (null !== $code && !\is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), \gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }

    /**
     * Get Barcode value
     *
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }

    /**
     * Set Barcode value
     *
     * @param string $barcode
     *
     * @return self
     */
    public function setBarcode($barcode = null)
    {
        // validation for constraint: string
        if (null !== $barcode && !\is_string($barcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcode, true), \gettype($barcode)), __LINE__);
        }
        $this->Barcode = $barcode;
        return $this;
    }
}
