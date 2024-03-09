<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPropertiesResponse StructType
 */
class GetPropertiesResponse extends AbstractStructBase
{
    /**
     * The GetPropertiesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var self
     */
    public $GetPropertiesResult;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfPropertyDefinition
     */
    public $Properties;

    /**
     * Constructor method for GetPropertiesResponse
     *
     * @uses GetPropertiesResponse::setGetPropertiesResult()
     * @uses GetPropertiesResponse::setProperties()
     */
    public function __construct(?self $getPropertiesResult = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfPropertyDefinition $properties = null)
    {
        $this
            ->setGetPropertiesResult($getPropertiesResult)
            ->setProperties($properties)
        ;
    }

    /**
     * Get GetPropertiesResult value
     *
     * @return self|null
     */
    public function getGetPropertiesResult()
    {
        return $this->GetPropertiesResult;
    }

    /**
     * Set GetPropertiesResult value
     *
     * @return self
     */
    public function setGetPropertiesResult(?self $getPropertiesResult = null)
    {
        $this->GetPropertiesResult = $getPropertiesResult;
        return $this;
    }

    /**
     * Get Properties value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfPropertyDefinition|null
     */
    public function getProperties()
    {
        return $this->Properties;
    }

    /**
     * Set Properties value
     *
     * @return self
     */
    public function setProperties(?\Scraper\ScraperDPD\ArrayType\ArrayOfPropertyDefinition $properties = null)
    {
        $this->Properties = $properties;
        return $this;
    }
}
