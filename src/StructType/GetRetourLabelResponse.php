<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourLabelResponse StructType
 */
class GetRetourLabelResponse extends AbstractStructBase
{
    /**
     * The GetRetourLabelResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var LabelResponse
     */
    public $GetRetourLabelResult;

    /**
     * Constructor method for GetRetourLabelResponse
     *
     * @uses GetRetourLabelResponse::setGetRetourLabelResult()
     */
    public function __construct(?LabelResponse $getRetourLabelResult = null)
    {
        $this
            ->setGetRetourLabelResult($getRetourLabelResult)
        ;
    }

    /**
     * Get GetRetourLabelResult value
     *
     * @return LabelResponse|null
     */
    public function getGetRetourLabelResult()
    {
        return $this->GetRetourLabelResult;
    }

    /**
     * Set GetRetourLabelResult value
     *
     * @return self
     */
    public function setGetRetourLabelResult(?LabelResponse $getRetourLabelResult = null)
    {
        $this->GetRetourLabelResult = $getRetourLabelResult;
        return $this;
    }
}
