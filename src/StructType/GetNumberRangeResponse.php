<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNumberRangeResponse StructType
 */
class GetNumberRangeResponse extends AbstractStructBase
{
    /**
     * The GetNumberRangeResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var NumberRangeResponse
     */
    public $GetNumberRangeResult;

    /**
     * Constructor method for GetNumberRangeResponse
     *
     * @uses GetNumberRangeResponse::setGetNumberRangeResult()
     */
    public function __construct(?NumberRangeResponse $getNumberRangeResult = null)
    {
        $this
            ->setGetNumberRangeResult($getNumberRangeResult)
        ;
    }

    /**
     * Get GetNumberRangeResult value
     *
     * @return NumberRangeResponse|null
     */
    public function getGetNumberRangeResult()
    {
        return $this->GetNumberRangeResult;
    }

    /**
     * Set GetNumberRangeResult value
     *
     * @return self
     */
    public function setGetNumberRangeResult(?NumberRangeResponse $getNumberRangeResult = null)
    {
        $this->GetNumberRangeResult = $getNumberRangeResult;
        return $this;
    }
}
