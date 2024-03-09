<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabelBcResponse StructType
 */
class GetLabelBcResponse extends AbstractStructBase
{
    /**
     * The GetLabelBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var LabelBcResponse
     */
    public $GetLabelBcResult;

    /**
     * Constructor method for GetLabelBcResponse
     *
     * @uses GetLabelBcResponse::setGetLabelBcResult()
     */
    public function __construct(?LabelBcResponse $getLabelBcResult = null)
    {
        $this
            ->setGetLabelBcResult($getLabelBcResult)
        ;
    }

    /**
     * Get GetLabelBcResult value
     *
     * @return LabelBcResponse|null
     */
    public function getGetLabelBcResult()
    {
        return $this->GetLabelBcResult;
    }

    /**
     * Set GetLabelBcResult value
     *
     * @return self
     */
    public function setGetLabelBcResult(?LabelBcResponse $getLabelBcResult = null)
    {
        $this->GetLabelBcResult = $getLabelBcResult;
        return $this;
    }
}
