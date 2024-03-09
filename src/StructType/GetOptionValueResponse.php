<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionValueResponse StructType
 */
class GetOptionValueResponse extends AbstractStructBase
{
    /**
     * The GetOptionValueResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GetOptionResponse
     */
    public $GetOptionValueResult;

    /**
     * Constructor method for GetOptionValueResponse
     *
     * @uses GetOptionValueResponse::setGetOptionValueResult()
     */
    public function __construct(?GetOptionResponse $getOptionValueResult = null)
    {
        $this
            ->setGetOptionValueResult($getOptionValueResult)
        ;
    }

    /**
     * Get GetOptionValueResult value
     *
     * @return GetOptionResponse|null
     */
    public function getGetOptionValueResult()
    {
        return $this->GetOptionValueResult;
    }

    /**
     * Set GetOptionValueResult value
     *
     * @return self
     */
    public function setGetOptionValueResult(?GetOptionResponse $getOptionValueResult = null)
    {
        $this->GetOptionValueResult = $getOptionValueResult;
        return $this;
    }
}
