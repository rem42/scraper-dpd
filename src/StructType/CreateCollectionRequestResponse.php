<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCollectionRequestResponse StructType
 */
class CreateCollectionRequestResponse extends AbstractStructBase
{
    /**
     * The CreateCollectionRequestResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfShipment
     */
    public $CreateCollectionRequestResult;

    /**
     * Constructor method for CreateCollectionRequestResponse
     *
     * @uses CreateCollectionRequestResponse::setCreateCollectionRequestResult()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment $createCollectionRequestResult = null)
    {
        $this
            ->setCreateCollectionRequestResult($createCollectionRequestResult)
        ;
    }

    /**
     * Get CreateCollectionRequestResult value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfShipment|null
     */
    public function getCreateCollectionRequestResult()
    {
        return $this->CreateCollectionRequestResult;
    }

    /**
     * Set CreateCollectionRequestResult value
     *
     * @return self
     */
    public function setCreateCollectionRequestResult(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment $createCollectionRequestResult = null)
    {
        $this->CreateCollectionRequestResult = $createCollectionRequestResult;
        return $this;
    }
}
