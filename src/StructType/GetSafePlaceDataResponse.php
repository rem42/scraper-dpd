<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSafePlaceDataResponse StructType
 */
class GetSafePlaceDataResponse extends AbstractStructBase
{
    /**
     * The GetSafePlaceDataResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var self
     */
    public $GetSafePlaceDataResult;
    /**
     * The Images
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfBase64Binary
     */
    public $Images;

    /**
     * Constructor method for GetSafePlaceDataResponse
     *
     * @uses GetSafePlaceDataResponse::setGetSafePlaceDataResult()
     * @uses GetSafePlaceDataResponse::setImages()
     */
    public function __construct(?self $getSafePlaceDataResult = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfBase64Binary $images = null)
    {
        $this
            ->setGetSafePlaceDataResult($getSafePlaceDataResult)
            ->setImages($images)
        ;
    }

    /**
     * Get GetSafePlaceDataResult value
     *
     * @return self|null
     */
    public function getGetSafePlaceDataResult()
    {
        return $this->GetSafePlaceDataResult;
    }

    /**
     * Set GetSafePlaceDataResult value
     *
     * @return self
     */
    public function setGetSafePlaceDataResult(?self $getSafePlaceDataResult = null)
    {
        $this->GetSafePlaceDataResult = $getSafePlaceDataResult;
        return $this;
    }

    /**
     * Get Images value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfBase64Binary|null
     */
    public function getImages()
    {
        return $this->Images;
    }

    /**
     * Set Images value
     *
     * @return self
     */
    public function setImages(?\Scraper\ScraperDPD\ArrayType\ArrayOfBase64Binary $images = null)
    {
        $this->Images = $images;
        return $this;
    }
}
