<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCollectionRequestBcResponse StructType
 */
class CreateCollectionRequestBcResponse extends AbstractStructBase
{
    /**
     * The CreateCollectionRequestBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc
     */
    public $CreateCollectionRequestBcResult;

    /**
     * Constructor method for CreateCollectionRequestBcResponse
     *
     * @uses CreateCollectionRequestBcResponse::setCreateCollectionRequestBcResult()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc $createCollectionRequestBcResult = null)
    {
        $this
            ->setCreateCollectionRequestBcResult($createCollectionRequestBcResult)
        ;
    }

    /**
     * Get CreateCollectionRequestBcResult value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc|null
     */
    public function getCreateCollectionRequestBcResult()
    {
        return $this->CreateCollectionRequestBcResult;
    }

    /**
     * Set CreateCollectionRequestBcResult value
     *
     * @return self
     */
    public function setCreateCollectionRequestBcResult(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc $createCollectionRequestBcResult = null)
    {
        $this->CreateCollectionRequestBcResult = $createCollectionRequestBcResult;
        return $this;
    }
}
