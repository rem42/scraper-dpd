<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabelDataResponse StructType
 */
class GetLabelDataResponse extends AbstractStructBase
{
    /**
     * The GetLabelDataResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var self
     */
    public $GetLabelDataResult;
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var LabelData
     */
    public $Data;
    /**
     * The BarcodeData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfBarcodeData
     */
    public $BarcodeData;

    /**
     * Constructor method for GetLabelDataResponse
     *
     * @uses GetLabelDataResponse::setGetLabelDataResult()
     * @uses GetLabelDataResponse::setData()
     * @uses GetLabelDataResponse::setBarcodeData()
     */
    public function __construct(?self $getLabelDataResult = null, ?LabelData $data = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfBarcodeData $barcodeData = null)
    {
        $this
            ->setGetLabelDataResult($getLabelDataResult)
            ->setData($data)
            ->setBarcodeData($barcodeData)
        ;
    }

    /**
     * Get GetLabelDataResult value
     *
     * @return self|null
     */
    public function getGetLabelDataResult()
    {
        return $this->GetLabelDataResult;
    }

    /**
     * Set GetLabelDataResult value
     *
     * @return self
     */
    public function setGetLabelDataResult(?self $getLabelDataResult = null)
    {
        $this->GetLabelDataResult = $getLabelDataResult;
        return $this;
    }

    /**
     * Get Data value
     *
     * @return LabelData|null
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * Set Data value
     *
     * @return self
     */
    public function setData(?LabelData $data = null)
    {
        $this->Data = $data;
        return $this;
    }

    /**
     * Get BarcodeData value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfBarcodeData|null
     */
    public function getBarcodeData()
    {
        return $this->BarcodeData;
    }

    /**
     * Set BarcodeData value
     *
     * @return self
     */
    public function setBarcodeData(?\Scraper\ScraperDPD\ArrayType\ArrayOfBarcodeData $barcodeData = null)
    {
        $this->BarcodeData = $barcodeData;
        return $this;
    }
}
