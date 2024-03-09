<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastNumberResponse StructType
 */
class GetLastNumberResponse extends AbstractStructBase
{
    /**
     * The GetLastNumberResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var self
     */
    public $GetLastNumberResult;
    /**
     * The entries
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfLong
     */
    public $entries;

    /**
     * Constructor method for GetLastNumberResponse
     *
     * @uses GetLastNumberResponse::setGetLastNumberResult()
     * @uses GetLastNumberResponse::setEntries()
     */
    public function __construct(?self $getLastNumberResult = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfLong $entries = null)
    {
        $this
            ->setGetLastNumberResult($getLastNumberResult)
            ->setEntries($entries)
        ;
    }

    /**
     * Get GetLastNumberResult value
     *
     * @return self|null
     */
    public function getGetLastNumberResult()
    {
        return $this->GetLastNumberResult;
    }

    /**
     * Set GetLastNumberResult value
     *
     * @return self
     */
    public function setGetLastNumberResult(?self $getLastNumberResult = null)
    {
        $this->GetLastNumberResult = $getLastNumberResult;
        return $this;
    }

    /**
     * Get entries value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfLong|null
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * Set entries value
     *
     * @return self
     */
    public function setEntries(?\Scraper\ScraperDPD\ArrayType\ArrayOfLong $entries = null)
    {
        $this->entries = $entries;
        return $this;
    }
}
