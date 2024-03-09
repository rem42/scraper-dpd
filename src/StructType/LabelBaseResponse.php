<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelBaseResponse StructType
 */
class LabelBaseResponse extends AbstractStructBase
{
    /**
     * The labels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfLabel
     */
    public $labels;

    /**
     * Constructor method for LabelBaseResponse
     *
     * @uses LabelBaseResponse::setLabels()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setLabels($labels)
        ;
    }

    /**
     * Get labels value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfLabel|null
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Set labels value
     *
     * @return self
     */
    public function setLabels(?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null)
    {
        $this->labels = $labels;
        return $this;
    }
}
