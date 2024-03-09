<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourLabelBcResponse StructType
 */
class GetRetourLabelBcResponse extends AbstractStructBase
{
    /**
     * The GetRetourLabelBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var LabelResponse
     */
    public $GetRetourLabelBcResult;

    /**
     * Constructor method for GetRetourLabelBcResponse
     *
     * @uses GetRetourLabelBcResponse::setGetRetourLabelBcResult()
     */
    public function __construct(?LabelResponse $getRetourLabelBcResult = null)
    {
        $this
            ->setGetRetourLabelBcResult($getRetourLabelBcResult)
        ;
    }

    /**
     * Get GetRetourLabelBcResult value
     *
     * @return LabelResponse|null
     */
    public function getGetRetourLabelBcResult()
    {
        return $this->GetRetourLabelBcResult;
    }

    /**
     * Set GetRetourLabelBcResult value
     *
     * @return self
     */
    public function setGetRetourLabelBcResult(?LabelResponse $getRetourLabelBcResult = null)
    {
        $this->GetRetourLabelBcResult = $getRetourLabelBcResult;
        return $this;
    }
}
