<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabelResponse StructType
 */
class GetLabelResponse extends AbstractStructBase
{
    /**
     * The GetLabelResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var LabelResponse
     */
    public $GetLabelResult;

    /**
     * Constructor method for GetLabelResponse
     *
     * @uses GetLabelResponse::setGetLabelResult()
     */
    public function __construct(?LabelResponse $getLabelResult = null)
    {
        $this
            ->setGetLabelResult($getLabelResult)
        ;
    }

    /**
     * Get GetLabelResult value
     *
     * @return LabelResponse|null
     */
    public function getGetLabelResult()
    {
        return $this->GetLabelResult;
    }

    /**
     * Set GetLabelResult value
     *
     * @return self
     */
    public function setGetLabelResult(?LabelResponse $getLabelResult = null)
    {
        $this->GetLabelResult = $getLabelResult;
        return $this;
    }
}
