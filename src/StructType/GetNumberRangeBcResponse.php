<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNumberRangeBcResponse StructType
 */
class GetNumberRangeBcResponse extends AbstractStructBase
{
    /**
     * The GetNumberRangeBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var NumberRangeBcResponse
     */
    public $GetNumberRangeBcResult;

    /**
     * Constructor method for GetNumberRangeBcResponse
     *
     * @uses GetNumberRangeBcResponse::setGetNumberRangeBcResult()
     */
    public function __construct(?NumberRangeBcResponse $getNumberRangeBcResult = null)
    {
        $this
            ->setGetNumberRangeBcResult($getNumberRangeBcResult)
        ;
    }

    /**
     * Get GetNumberRangeBcResult value
     *
     * @return NumberRangeBcResponse|null
     */
    public function getGetNumberRangeBcResult()
    {
        return $this->GetNumberRangeBcResult;
    }

    /**
     * Set GetNumberRangeBcResult value
     *
     * @return self
     */
    public function setGetNumberRangeBcResult(?NumberRangeBcResponse $getNumberRangeBcResult = null)
    {
        $this->GetNumberRangeBcResult = $getNumberRangeBcResult;
        return $this;
    }
}
