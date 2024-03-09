<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionValuesResponse StructType
 */
class GetOptionValuesResponse extends AbstractStructBase
{
    /**
     * The GetOptionValuesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GetOptionsResponse
     */
    public $GetOptionValuesResult;

    /**
     * Constructor method for GetOptionValuesResponse
     *
     * @uses GetOptionValuesResponse::setGetOptionValuesResult()
     */
    public function __construct(?GetOptionsResponse $getOptionValuesResult = null)
    {
        $this
            ->setGetOptionValuesResult($getOptionValuesResult)
        ;
    }

    /**
     * Get GetOptionValuesResult value
     *
     * @return GetOptionsResponse|null
     */
    public function getGetOptionValuesResult()
    {
        return $this->GetOptionValuesResult;
    }

    /**
     * Set GetOptionValuesResult value
     *
     * @return self
     */
    public function setGetOptionValuesResult(?GetOptionsResponse $getOptionValuesResult = null)
    {
        $this->GetOptionValuesResult = $getOptionValuesResult;
        return $this;
    }
}
