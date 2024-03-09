<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionsResponse StructType
 */
class GetOptionsResponse extends AbstractStructBase
{
    /**
     * The Options
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfGetOptionResponse
     */
    public $Options;

    /**
     * Constructor method for GetOptionsResponse
     *
     * @uses GetOptionsResponse::setOptions()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfGetOptionResponse $options = null)
    {
        $this
            ->setOptions($options)
        ;
    }

    /**
     * Get Options value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfGetOptionResponse|null
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * Set Options value
     *
     * @return self
     */
    public function setOptions(?\Scraper\ScraperDPD\ArrayType\ArrayOfGetOptionResponse $options = null)
    {
        $this->Options = $options;
        return $this;
    }
}
